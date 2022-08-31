<?php

namespace App\Observer;
class UserRepository implements SplSubject
{
    private $users = [];
    private $observers = [];

    public function __construct()
    {
        $this->observers["*"] = [];
    }

    private function initEventGroup(string $event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observersp[$event] = [];
        }
    }

    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup();
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer, string $event = "*"): void
    {

    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        // TODO: Implement notify() method.
    }
}