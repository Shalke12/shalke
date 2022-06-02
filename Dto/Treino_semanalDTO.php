<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Treino_semanalDTO
 *
 * @author Daniela
 */
class Treino_semanalDTO {
    //put your code here
    private $idTreino_semanal;
    private $semana;
    
    
    function getIdTreino_semanal() {
        return $this->idTreino_semanal;
    }

    function getSemana() {
        return $this->semana;
    }

    function setIdTreino_semanal($idTreino_semanal): void {
        $this->idTreino_semanal = $idTreino_semanal;
    }

    function setSemana($semana): void {
        $this->semana = $semana;
    }



}
