<?php

// Interfaces
require_once 'Interfaces/Event.php';
require_once 'Interfaces/Subscriber.php';

// Events
require_once 'Events/NewOrderEvent.php';
require_once 'Events/UserRegisterEvent.php';

// Subscribers
require_once 'Subscribers/EmailNotificationSubscriber.php';
require_once 'Subscribers/LoggerSubscriber.php';

// Event manager
require_once 'EventManager.php';

// Usage (namespaces)
use Observer\EventManager;
use Subscriber\EmailNotificationSubscriber;
use Subscriber\LoggerSubscriber;
use Event\NewOrderEvent;
use Event\UserRegisterEvent;

// Create/Instantiate the event manager
$eventManager = new EventManager();

// Create/Instantiate the subscribers
$emailSubscriber = new EmailNotificationSubscriber();
$loggerSubscriber = new LoggerSubscriber();

// Subscribe/register the subscribers to the events
$eventManager->subscribe($emailSubscriber, 'new_order');
$eventManager->subscribe($loggerSubscriber, 'new_order');
$eventManager->subscribe($emailSubscriber, 'user_register');
$eventManager->subscribe($loggerSubscriber, 'user_register');

// Create/Instantiate the new order and user register events
$newOrderEvent = new NewOrderEvent('The new order has been made!');
$eventManager->notify($newOrderEvent);
echo "\n";
$userRegisterEvent = new UserRegisterEvent('A new user has been created!');
$eventManager->notify($userRegisterEvent);

// Unsubscribe the logger subscriber from 'New order' event
$eventManager->unsubscribe($loggerSubscriber, 'new_order');
$eventManager->unsubscribe($emailSubscriber, 'new_order');
$eventManager->notify($newOrderEvent);

// Print the subscribers for 'New order' event
$event = 'new_order';
$subscribers = $eventManager->getSubscribers($event);
$count = 1;
echo "\n------------ Subscribers for event '$event': ---------------- \n";

if (empty($subscribers)) {
    echo "No subscribers for this event!\n\n";
} else {
    foreach ($subscribers as $subscriber) {
        echo get_class($subscriber) . "\n";
    }
}

// Print all subscribers
echo "\n------------ All subscribers: ---------------- \n";
$subscribers = $eventManager->getAllSubscribers();
$index = 1;

foreach ($subscribers as $event => $subscribers) {
    echo $index . "." . $event . "\n";
    $index++;

    if (empty($subscribers)) {
        echo "No subscribers for this event!\n\n";
    } else {
        foreach ($subscribers as $subscriber) {
            echo get_class($subscriber) . "\n";
        }
    }
}
