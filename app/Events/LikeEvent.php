<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LikeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $params;

    public $endpoint;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $params, string $endpoint)
    {
        $this->params   = $params;
        $this->endpoint = $endpoint;
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
