<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class DefaultSNSNotificationProcessed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var string
     */
    public string $subject;

    /**
     * @var string|array
     */
    public string|array $message;

    /**
     * @var array
     */
    public array $arnTopics;

    /**
     * @param  string  $subject
     * @param  string|array  $message
     * @param  array  $arnTopics
     */
    public function __construct(string $subject, string|array $message, array $arnTopics)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->arnTopics = $arnTopics;
    }
}
