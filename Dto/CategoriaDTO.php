<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriaDTO
 *
 * @author Daniela
 */
class CategoriaDTO {
    //put your code here
     private $idCategoria;
    private $idade;
    
    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdCategoria($idCategoria): void {
        $this->idCategoria = $idCategoria;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }



}
