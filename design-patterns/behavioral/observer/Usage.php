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
$eventManager->subscribe($emailSubscriber, 'New order');
$eventManager->subscribe($loggerSubscriber, 'New order');
$eventManager->subscribe($emailSubscriber, 'User registered');
$eventManager->subscribe($loggerSubscriber, 'User registered');

// Create/Instantiate the new order and user register events
$newOrderEvent = new NewOrderEvent();
$eventManager->notify($newOrderEvent);
echo "\n";
$userRegisterEvent = new UserRegisterEvent();
$eventManager->notify($userRegisterEvent);

// Print the subscribers for 'New order' event
// $event = 'New order';
// $subscribers = $eventManager->getSubscribers($event);

// echo "\n------------ Subscribers for event '$event': ---------------- \n";
// foreach ($subscribers as $subscriber) {
//     echo get_class($subscriber) . "\n";
// }
