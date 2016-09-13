<?php
namespace Maiev\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class TestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            OrderPlacedEvent::NAME => ['preEvent1'],
        );
    }
    public function preEvent1( OrderPlacedEvent $event )
    {
        echo "dispatch event test subscriber";
    }
}