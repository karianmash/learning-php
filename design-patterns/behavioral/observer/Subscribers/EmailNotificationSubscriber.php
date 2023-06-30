<?php

namespace Subscriber;

use Interfaces\Event;
use Interfaces\Subscriber;
use Event\NewOrderEvent;

class EmailNotificationSubscriber implements Subscriber
{
    public function update(Event $event)
    {
        if ($event instanceof NewOrderEvent) {
            echo "Email notification sent: New order received!\n";
        }
    }
}
