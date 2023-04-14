<?php

namespace App\Model;

class CategoriaModel {

    public static $instance;

    public function __construct() {
        
    }

    static public function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new CategoriaModel();
        return self::$instance;
    }

    public function findCategoriaByID($id) {
        try {
            $sql = "SELECT * FROM categoria where id=:id";
            $statement_sql = Connection::getConnection()->prepare($sql);
            $statement_sql->bindValue(":id", $id);
            $statement_sql->execute();
            return $this->popular($statement_sql->fetch(\PDO::FETCH_ASSOC));
        } catch (\PDOException $e) {
            print "Erro em getCategoriaPorID :: " . $e->getMessage();
        }
    }

    public function popular($linha1) {
        $cat = new Categoria();
        $cat->setId($linha1["id"]);
        $cat->setNome($linha1 ["nome"]);
        return $cat;
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM categoria";
            $statement_sql = Connection::getConnection()->prepare($sql);
            $statement_sql->execute();
            return $this->fech($statement_sql);
        } catch (\PDOException $e) {
            print "Erro em getAll Categoria :: " . $e->getMessage();
        }
    }

    private function fech($statement_sql) {
        $results = array();
        if ($statement_sql) {
            while ($linha1 = $statement_sql->fetch(\PDO::FETCH_OBJ)) {
                $cat = new Categoria();
                $cat->setId($linha1->id);
                $cat->setNome($linha1->nome);
                $results [] = $cat;
            }
        }
        return $results;
    }

}
