<?php

namespace App\Models;

use App\Interfaces\Contracts\Observer;
use App\Interfaces\Contracts\Subject;

class Announcement implements Subject
{

    private $message;
    private $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $key = array_search($observer, $this->observers, true);

        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->announce($this->message);
        }
    }

    public function setMessage(array $data): void
    {
        $this->message = $data;
        $this->notify();
    }
}
