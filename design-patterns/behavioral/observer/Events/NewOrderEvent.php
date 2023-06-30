<?php

namespace Event;

use Interfaces\Event;

class NewOrderEvent implements Event
{
    public function getName()
    {
        return 'New order';
    }
}
