<?php

namespace App\Component;

class Connection implements DbConnectionInterface
{
    public function connect(string $dns): bool
    {
        return true;
    }
}