<?php

namespace App\Component;

interface DbManagerInterface
{
    public function getConnection(): DbConnectionInterface;
    
    public function createCommandSql(string $sql): self;
    
    public function queryOne(?DbConnectionInterface $db): ?array;
    
    public function queryAll(?DbConnectionInterface $db): array;
}
