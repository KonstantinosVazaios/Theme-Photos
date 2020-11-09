<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MailNotification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name;
    public $telephone;
    public $email;
    public $message;

    public function __construct($name, $telephone, $email, $message)
    {
        $this->name = $name;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->message = $message;
    }


    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
