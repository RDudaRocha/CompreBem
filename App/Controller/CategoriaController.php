<?php

namespace App\Controller;

use App\Model\CategoriaModel;

class CategoriaController {

    function __construct() {
        
    }

    public function getCategoriaPorID($id) {
        return CategoriaModel::getInstance()->findCategoriaByID($id);
    }

    public function getCategoria() {
        return CategoriaModel::getInstance()->getAll();
    }

    public function save() {
        
    }

    public function update() {
        
    }

    public function delete() {
        
    }

}