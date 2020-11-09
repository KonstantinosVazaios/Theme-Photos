<?php

namespace App\Listeners;

use App\Events\MailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Message;

class SaveMailToDB implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MailNotification  $event
     * @return void
     */
    public function handle(MailNotification $event)
    {
        Message::create([
          'name' => $event->name,
          'telephone' => $event->telephone,
          'email' => $event->email,
          'message'=> $event->message,
        ]);
    }
}
