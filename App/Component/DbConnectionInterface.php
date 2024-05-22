<?php

namespace App\Component;

interface DbConnectionInterface
{
    public function connect(string $dns): bool;
}
