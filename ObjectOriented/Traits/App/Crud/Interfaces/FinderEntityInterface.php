<?php

namespace ObjectOriented\Traits\App\Crud\Interfaces;

interface FinderEntityInterface
{
    public function findByCondition(array $condition);
    
    public function findById($id);
}
