<?php

namespace App\Listeners;

use App\Events\MailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendMailNotification implements ShouldQueue
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
        Mail::to('vazaiosdev@gmail.com')->send(new ContactMail($event->name, $event->telephone, $event->email, $event->message));
    }
}
