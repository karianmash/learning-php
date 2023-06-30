<?php

namespace Subscriber;

use Interfaces\Event;
use Interfaces\Subscriber;

class LoggerSubscriber implements Subscriber
{
    public function update(Event $event)
    {
        echo "Logger: Event occurred - " . $event->getName() . "\n";
    }
}
