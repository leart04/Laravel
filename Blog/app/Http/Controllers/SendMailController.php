<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendMailController extends Controller
{
    public function index(Request $request) {
        return view('blog.contact');
    }

    public function sendMail(Request $request){
        $mail = new PHPMailer(true);
    
        try {
    
            /* Email SMTP Settings */
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');
    
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($request->Email);
    
            $mail->isHTML(true);
    
            $mail->Subject = $request->Name;

            $message = $request->Name . $request->Message;

            $mail->Body    = $message;
    
            if( !$mail->send() ) {

                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
                
            else {
                return back()->with("success", "Email has been sent.");
            }
    
        } catch (Exception $e) {
                return back()->with('error','Message could not be sent.');
        }
    }
}