<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send(Request $request)
    {
        $objRoomeo = new \stdClass();
        $objRoomeo->name = $request->nameMail;
        $objRoomeo->surname = $request->surnameMail;
        $objRoomeo->email = $request->emailMail;
        $objRoomeo->phone = $request->phoneMail;
        $objRoomeo->iam = $request->iamMail;
        $objRoomeo->howdid = $request->howdidMail;
        $objRoomeo->message = $request->messageMail;
        $objRoomeo->sender = $objRoomeo->name;
        $objRoomeo->receiver = 'Roomeo Limited';
 
        Mail::to("ftmuffo@gmail.com")->send(new ContactMail($objRoomeo));

        return redirect(url('/contact'));
    }
}