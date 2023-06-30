<?php

require_once 'Interfaces/Event.php';
require_once 'Interfaces/Subscriber.php';
require_once 'EventManager.php';
require_once 'Events/NewOrderEvent.php';
require_once 'Subscribers/EmailNotificationSubscriber.php';
require_once 'Subscribers/LoggerSubscriber.php';

use Observer\EventManager;
use Subscriber\EmailNotificationSubscriber;
use Subscriber\LoggerSubscriber;
use Event\NewOrderEvent;

$eventManager = new EventManager();

$emailSubscriber = new EmailNotificationSubscriber();
$loggerSubscriber = new LoggerSubscriber();

$eventManager->subscribe($emailSubscriber, 'New order');
$eventManager->subscribe($loggerSubscriber, 'New order');

$eventManager->subscribe($emailSubscriber, 'User registered');
$eventManager->subscribe($loggerSubscriber, 'User registered');

$newOrderEvent = new NewOrderEvent();
$eventManager->notify($newOrderEvent);
