<?php

namespace App\Models;

use App\Interfaces\Contracts\Observer;
use App\Interfaces\Contracts\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model implements Subject
{
    use HasFactory;
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
            $observer->update($this->message);
        }
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
        $this->notify();
    }
}
