<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerfilDTO
 *
 * @author Daniela
 */
class PerfilDTO {
    //put your code here
    
     private $idPerfil;
    private $perfil;
    
    function getIdPerfil() {
        return $this->idPerfil;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setIdPerfil($idPerfil): void {
        $this->idPerfil = $idPerfil;
    }

    function setPerfil($perfil): void {
        $this->perfil = $perfil;
    }


}
