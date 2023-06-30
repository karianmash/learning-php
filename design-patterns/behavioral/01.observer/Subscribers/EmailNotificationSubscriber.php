<?php

namespace Subscriber;

use Interfaces\Event;
use Interfaces\Subscriber;

class EmailNotificationSubscriber implements Subscriber
{
    public function update(Event $event)
    {
        echo "Email notification sent: {$event->getMessage()}\n";
    }
}
