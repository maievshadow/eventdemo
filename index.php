<?php
require "./vendor/autoload.php";

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;
use Maiev\Event\OrderPlacedEvent;
use Maiev\Event\AcmeListener;
use Maiev\Event\Order;
use Maiev\Event\TestSubscriber;

$dispatcher = new EventDispatcher();

$listener = new AcmeListener();

//($eventName, $listener, $priority = 0)
$dispatcher->addListener(OrderPlacedEvent::NAME, array($listener, 'onFooAction'));

$dispatcher->addListener(OrderPlacedEvent::NAME, function (Event $event) {
    // will be executed when the foo.action event is dispatched
    echo 'clusure event';
});

$order = new Order();
$event = new OrderPlacedEvent($order);

$subscriber = new TestSubscriber();
$dispatcher->addSubscriber($subscriber);

$dispatcher->dispatch(OrderPlacedEvent::NAME, $event);



//$listeners = $dispatcher->getListeners();
