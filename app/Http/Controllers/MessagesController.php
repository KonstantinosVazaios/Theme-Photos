<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function index()
    {
      //Get all Mails
      $messages = Message::latest()->paginate(10);
      return view('admin.message.index', compact('messages'));
    }

    public function show(Message $mail)
    {
      return view('admin.message.show', compact('mail'));
    }

    public function delete(Message $mail)
    {
      //Delete Mail
      $mail->delete();
      return redirect('/admin/homu/mail');
    }
}
