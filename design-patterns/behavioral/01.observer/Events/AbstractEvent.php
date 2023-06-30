<?php

namespace Event;

use Interfaces\Event;

abstract class AbstractEvent implements Event
{
    protected $name;
    protected $message;

    public function __construct($name, $message)
    {
        $this->name = $name;
        $this->message = $message;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
