<?php

namespace Event;

class UserRegisterEvent extends AbstractEvent
{
    public function __construct($message)
    {
        parent::__construct('user_register', $message);
    }
}