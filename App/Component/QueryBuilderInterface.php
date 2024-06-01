<?php

namespace App\Component;


/**
 * @var QueryBuilderInterface $builder
 * $builder = new QueryBuilder();
 * $builder->select(['column1', 'column2', 'column3'])
 * ->from('tableName')
 * ->where()
 * ->andWhere();
 */
interface QueryBuilderInterface
{
    public function getConnection(): Connection;
    
    public function select(array $columns = []): self; // SELECT *
    
    public function from(string $tableName): self;    // SELECT * FROM tableName
    
    //  ['AND', ['column' => 'value'], ['column2' => 'value2']]
    public function where(array $conditions): self;   // SELECT * FROM tableName WHERE column=value AND column2=value2
    
    public function andWhere(array $conditions): self;  // SELECT * FROM tableName WHERE column=value AND column2=value2
    
    public function orWhere(array $conditions): self; // SELECT * FROM tableName WHERE (column=value AND column2=value2) OR (column3=value3)
    
    public function join(string $tableName, string $type = 'inner'): self;     // SELECT * FROM tableName WHERE id=1 OR fileName={value}
    
    public function innerJoin(string $tableName): self;    // SELECT * FROM product p RIGHT JOIN product_category pg ON pg.id=p.category_id WHERE ...
    
    public function leftJoin(string $tableName): self;
    
    public function rightJoin(string $tableName): self;                        // SELECT * FROM tableName WHERE id=1 OR fileName={value}
    
    public function orderBy(array $columns): self;                                   // SELECT * FROM tableName WHERE id=1 OR fileName={value}
    
    public function groupBy(array $columns): self;                                   // SELECT * FROM tableName WHERE id=1 OR fileName={value}
    
    public function one(?Connection $db): array;
    
    public function all(?Connection $db): array;
}
