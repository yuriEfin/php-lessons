<?php

namespace Component;

interface DbManagerInterface
{
    public function getConnection(): Connection;
    
    public function createCommandSql(string $sql): self;
    
    public function queryOne(?Connection $db): ?array;
    
    public function queryAll(?Connection $db): array;
}
