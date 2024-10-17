<?php

namespace App\Http\Controllers;

use App\Mail\MailAttachment;
use App\Mail\SendTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('SendMailForm.Form');
    }

    // sending without attachment
    public function sendMail(Request $req)
    {
        // prepare data for mail
        $name = $req->input('name');
        $email = $req->input('mail');
        $message = $req->input('message');

        // dd($name,$email,$message);

        // Send the mail
        try {
            $response = Mail::to($email)->send(new SendTestMail($name, $email, $message));
            // dd($response);
            return 'Email sent successfully!';
        } catch (\Exception $e) {
            return 'Failed to send email: ' . $e->getMessage();
        }

        return 'Email sent successfully!';
    }


    // controller functions for sending mail with attachment
    public function form()
    {
        return view('MailwithAttachment.form');
        // view('mails.attachment')
    }

    public function sendMailAttachment(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'attachment' => 'required|mimes:pdf,doc,xls,xlsx|max:2048'
        ]);

        $file = $req->file('attachment');
        $fileName = $file->getClientOriginalName();
        $file->move('uploads',$fileName);
        // dd($fileName);

        try {
            Mail::to($req['email'])->send(new MailAttachment($req->all(),$fileName));
        } catch (\Exception $e) {
            //throw $th;
            return response()->json($e->getMessage(), 500);
        }
    }
}
