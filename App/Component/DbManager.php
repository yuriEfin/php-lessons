<?php

namespace App\Component;

class DbManager implements DbManagerInterface
{
    public function __construct(private DbConnectionInterface $connection)
    {
    }
    
    public function getConnection(): DbConnectionInterface
    {
        return $this->connection;
    }
    
    public function createCommandSql(string $sql): self
    {
        return $this;
    }
    
    public function queryOne(?DbConnectionInterface $db): ?array
    {
        return [];
    }
    
    public function queryAll(?DbConnectionInterface $db): array
    {
        return [];
    }
}
