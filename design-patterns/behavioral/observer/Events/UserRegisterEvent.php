<?php

namespace Event;

use Interfaces\Event;

class UserRegisterEvent implements Event
{
    private $name = 'User registered';
    private $message = 'A new user has been registered!';

    public function getName()
    {
        return $this->name;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
