<?php

namespace ObjectOriented\Traits\App\Crud;

use ObjectOriented\Traits\App\Crud\Interfaces\CrudInterface;
use ObjectOriented\Traits\App\Crud\Interfaces\FinderEntityInterface;

class ProductManager implements CrudInterface, FinderEntityInterface
{
    // можно определить методы прямо в самом классе, а можно все методы вынести в трейт или лучше также в 2 разных трейта:
    // CrudContractTrait
    // FinderContractTrait
    // и потом подключить их в нашем текущем классе через use
    // use CrudContractTrait, CrudContractTrait;
    public function create()
    {
        // TODO: Implement create() method.
    }
    
    public function update($id, array $params)
    {
        // TODO: Implement update() method.
    }
    
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
    
    public function findByCondition(array $condition)
    {
        // TODO: Implement findByCondition() method.
    }
    
    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
