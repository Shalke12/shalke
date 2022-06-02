<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nucleo_AtendimentoDTO
 *
 * @author Daniela
 */
class Nucleo_AtendimentoDTO {
    //put your code here
    
    private $idNucleo_Atendimento; 
    private $sede;   
    private $telefone_sede;
    private $email_email;
    private $endereco_sede; 
    private $cidade_sede;  
    private $cep_sede;  
    private $uf_sede; 

    function getIdNucleo_Atendimento() {
        return $this->idNucleo_Atendimento;
    }

    function getSede() {
        return $this->sede;
    }

    function getTelefone_sede() {
        return $this->telefone_sede;
    }

    function getEmail_email() {
        return $this->email_email;
    }

    function getEndereco_sede() {
        return $this->endereco_sede;
    }

    function getCidade_sede() {
        return $this->cidade_sede;
    }

    function getCep_sede() {
        return $this->cep_sede;
    }

    function getUf_sede() {
        return $this->uf_sede;
    }

    function setIdNucleo_Atendimento($idNucleo_Atendimento): void {
        $this->idNucleo_Atendimento = $idNucleo_Atendimento;
    }

    function setSede($sede): void {
        $this->sede = $sede;
    }

    function setTelefone_sede($telefone_sede): void {
        $this->telefone_sede = $telefone_sede;
    }

    function setEmail_email($email_email): void {
        $this->email_email = $email_email;
    }

    function setEndereco_sede($endereco_sede): void {
        $this->endereco_sede = $endereco_sede;
    }

    function setCidade_sede($cidade_sede): void {
        $this->cidade_sede = $cidade_sede;
    }

    function setCep_sede($cep_sede): void {
        $this->cep_sede = $cep_sede;
    }

    function setUf_sede($uf_sede): void {
        $this->uf_sede = $uf_sede;
    }


    
    

}
