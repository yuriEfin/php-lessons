<?php

namespace App\Component;

class QueryBuilder implements QueryBuilderInterface
{
    public function getConnection(): Connection
    {
        // TODO: Implement getConnection() method.
    }
    
    public function select(array $columns = []): QueryBuilderInterface
    {
        // TODO: Implement select() method.
    }
    
    public function from(string $tableName): QueryBuilderInterface
    {
        // TODO: Implement from() method.
    }
    
    public function where(array $conditions): QueryBuilderInterface
    {
        // TODO: Implement where() method.
    }
    
    public function andWhere(array $conditions): QueryBuilderInterface
    {
        // TODO: Implement andWhere() method.
    }
    
    public function orWhere(array $conditions): QueryBuilderInterface
    {
        // TODO: Implement orWhere() method.
    }
    
    public function join(string $tableName, string $type = 'inner'): QueryBuilderInterface
    {
        // TODO: Implement join() method.
    }
    
    public function innerJoin(string $tableName): QueryBuilderInterface
    {
        // TODO: Implement innerJoin() method.
    }
    
    public function leftJoin(string $tableName): QueryBuilderInterface
    {
        // TODO: Implement leftJoin() method.
    }
    
    public function rightJoin(string $tableName): QueryBuilderInterface
    {
        // TODO: Implement rightJoin() method.
    }
    
    public function orderBy(array $columns): QueryBuilderInterface
    {
        // TODO: Implement orderBy() method.
    }
    
    public function groupBy(array $columns): QueryBuilderInterface
    {
        // TODO: Implement groupBy() method.
    }
    
    public function one(?Connection $db): array
    {
        // TODO: Implement one() method.
    }
    
    public function all(?Connection $db): array
    {
        // TODO: Implement all() method.
    }
    
}
