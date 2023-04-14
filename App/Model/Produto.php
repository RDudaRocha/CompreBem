<?php

namespace App\Model;

class Produto {

    private $id;
    private $titulo;
    private $descricao;
    private $preco;
    private $estoque;
    private $categoria;
    private $foto;
    private $precoimposto;

    
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }
    
    public function getPrecoImposto() {
        return $this->precoimposto;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setPreco($preco): void {
        $this->preco = $preco;
    }

    public function setPrecoImposto($precoimposto): void {
        $this->precoimposto = $precoimposto;
    }

    public function setEstoque($estoque): void {
        $this->estoque = $estoque;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }


  
}
