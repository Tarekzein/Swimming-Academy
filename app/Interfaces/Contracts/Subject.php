<?php

namespace App\Interfaces\Contracts;

interface Subject {

    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;

}
