<?php

namespace Observer;

use Interfaces\Subscriber;
use Interfaces\Event;

class EventManager
{
    private $subscribers = [];

    public function subscribe(Subscriber $subscriber, $eventName)
    {
        if (!isset($this->subscribers[$eventName])) {
            $this->subscribers[$eventName] = [];
        }

        $this->subscribers[$eventName][] = $subscriber;
    }

    public function unsubscribe(Subscriber $subscriber, $eventName)
    {
        if (isset($this->subscribers[$eventName])) {
            $index = array_search($subscriber, $this->subscribers[$eventName], true);
            if ($index !== false) {
                unset($this->subscribers[$eventName][$index]);
            }
        }
    }

    public function notify(Event $event)
    {
        $eventName = $event->getName();
        if (isset($this->subscribers[$eventName])) {
            foreach ($this->subscribers[$eventName] as $subscriber) {
                $subscriber->update($event);
            }
        }
    }

    public function getSubscribers($eventName)
    {
        if (isset($this->subscribers[$eventName])) {
            return $this->subscribers[$eventName];
        }

        return [];
    }
}
