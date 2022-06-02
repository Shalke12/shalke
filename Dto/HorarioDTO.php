<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HororioDTO
 *
 * @author Daniela
 */
class HorarioDTO {
    //put your code here
     private $idHorario;
    private $hora;
    
    function getIdHorario() {
        return $this->idHorario;
    }

    function getHora() {
        return $this->hora;
    }

    function setIdHorario($idHorario): void {
        $this->idHorario = $idHorario;
    }

    function setHora($hora): void {
        $this->hora = $hora;
    }


   
}
