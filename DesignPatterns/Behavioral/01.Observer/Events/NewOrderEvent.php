<?php

namespace Event;

require_once('AbstractEvent.php');

class NewOrderEvent extends AbstractEvent
{
    public function __construct($message)
    {
        parent::__construct('new_order', $message);
    }
}
