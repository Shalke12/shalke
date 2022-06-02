<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModalidadeDTO
 *
 * @author Daniela
 */
class ModalidadeDTO {
    //put your code here
     private $idModalidade;
    private $descricao;
    
    function getIdModalidade() {
        return $this->idModalidade;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdModalidade($idModalidade): void {
        $this->idModalidade = $idModalidade;
    }

    function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }


}

