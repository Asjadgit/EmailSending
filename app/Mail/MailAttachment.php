<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailAttachment extends Mailable
{
    use Queueable, SerializesModels;
    protected $req;
    protected $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($req,$fileName)
    {
        $this->req = $req;
        $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail with Attachment',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.attachment',
            with: ['req' => $this->req],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        if($this->fileName){
            $attachments = [
                Attachment::fromPath(public_path('/uploads/' . $this->fileName)),
            ];
        }

        return $attachments;
    }
}
