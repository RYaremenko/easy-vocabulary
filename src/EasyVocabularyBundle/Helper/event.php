<?php

if (!function_exists('dispatchEvent')) {
    /**
     * @param string $eventName
     * @param \Symfony\Component\EventDispatcher\Event $event
     */
    function dispatchEvent(string $eventName, \Symfony\Component\EventDispatcher\Event $event)
    {
        global $kernel;
        $kernel->getContainer()->get('event_dispatcher')->dispatch($eventName, $event);
    }
}