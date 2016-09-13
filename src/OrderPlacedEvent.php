<?php
namespace Maiev\Event;

use Symfony\Component\EventDispatcher\Event;
use Maiev\Event\Order;

/**
* The order.placed event is dispatched each time an order is created
* in the system.
*/
class OrderPlacedEvent extends Event
{
    const NAME = 'order.placed';

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }
}