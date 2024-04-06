<?php

namespace ObjectOriented\Traits\App\Crud\Interfaces;

interface CrudInterface
{
    public function create();
    
    public function update($id, array $params);
    
    public function delete($id);
}
