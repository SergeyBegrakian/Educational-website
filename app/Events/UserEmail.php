<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserEmail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $msg;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->msg = $msg;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
