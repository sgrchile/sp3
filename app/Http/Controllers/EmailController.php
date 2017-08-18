<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
  public function send(Request $request)
     {
         $title = $request->input('title');
         $content = $request->input('content');

         Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
         {

             $message->from('projectosp3@gmail.com', 'Equipo SP3');

             $message->to('ivan_vilugron@hotmail.es');

         });
          return back()->with('success', 'Email enviado exitosamente.');
     }
}
