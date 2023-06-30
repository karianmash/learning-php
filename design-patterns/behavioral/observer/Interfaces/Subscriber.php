<?php

namespace Interfaces;

interface Subscriber
{
    public function update(Event $event);
}
