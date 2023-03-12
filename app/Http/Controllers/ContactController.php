<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\SMTP;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

use App\Models\Contact;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

use Illuminate\Support\Str;







class ContactController extends Controller

{
    public function submit(ContactRequest $contactRequest)
    {


        require base_path('vendor/autoload.php');

        $uuid = Str::uuid()->toString();

        $contact = new Contact();
        $contact->uuid = $uuid;
        $contact->from = $contactRequest->input('from');
        $contact->to = $contactRequest->input('to');

        if ($contactRequest->input('copy')) {
            $contact->copy = $contactRequest->input('copy');
        } else  $contact->copy = '';

        $contact->body = $contactRequest->input('body');
        $contact->subject = $contactRequest->input('subject');



        $contact->user_agent = $contactRequest->header('user-agent');
        $contact->ip = $contactRequest->ip();




        $contact->save();
        $mail = new PHPMailer(true);


        try {


            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '********';
            $mail->Password = '********';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($contactRequest->from);
            $mail->addAddress($contactRequest->to);

            $mail->addCC($contactRequest->to);
            $mail->addReplyTo($contactRequest->from, 'Vladimir');




            $mail->isHTML(true);

            $mail->Subject = $contactRequest->subject;
            $mail->Body    = $contactRequest->Body;

            // $mail->AltBody = plain text version of email body;


            return  view('messages', ['uuid' => $uuid]);
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }


    public function showOneMessage($uuid)
    {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($uuid)]);
    }
}
