<?php

namespace App\Interfaces\Contracts;



interface Observer
{
    public function announce(array $data): void;
}
