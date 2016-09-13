<?php
namespace Maiev\Event;
use Symfony\Component\EventDispatcher\Event;

class AcmeListener
{
    // ...

    public function onFooAction(Event $event)
    {
        // ... do something
        echo 'running....';
    }
}