<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for sending mail without attachment
Route::get('mail',[MailController::class,'index']);
Route::post('sendmail',[MailController::class,'sendMail'])->name('sendMail');


// Route for sending mail with attachment
Route::get('mailing',[MailController::class,'form']);
Route::post('mailing-attachment',[MailController::class,'sendMailAttachment'])->name('mail');
