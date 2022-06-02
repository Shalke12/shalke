<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FamiliaDTO
 *
 * @author Daniela
 */
class FamiliaDTO {
    //put your code here
    private $idFamilia; 
    private $nome_chefe_familia; 
    private $sexo;
    private $cpf; 
    private $endereco; 
    private $cidade;  
    private $cep;  
    private $uf; 
    private $email; 
    private $telefone;  
    private $nucleo_familiar; 
    private $moradia; 
    private $Nucleo_Atendimento_idNucleo_Atendimento;
    
    function getIdFamilia() {
        return $this->idFamilia;
    }

    function getNome_chefe_familia() {
        return $this->nome_chefe_familia;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getUf() {
        return $this->uf;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNucleo_familiar() {
        return $this->nucleo_familiar;
    }

    function getMoradia() {
        return $this->moradia;
    }

    function getNucleo_Atendimento_idNucleo_Atendimento() {
        return $this->Nucleo_Atendimento_idNucleo_Atendimento;
    }

    function setIdFamilia($idFamilia): void {
        $this->idFamilia = $idFamilia;
    }

    function setNome_chefe_familia($nome_chefe_familia): void {
        $this->nome_chefe_familia = $nome_chefe_familia;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    function setCep($cep): void {
        $this->cep = $cep;
    }

    function setUf($uf): void {
        $this->uf = $uf;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    function setNucleo_familiar($nucleo_familiar): void {
        $this->nucleo_familiar = $nucleo_familiar;
    }

    function setMoradia($moradia): void {
        $this->moradia = $moradia;
    }

    function setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento): void {
        $this->Nucleo_Atendimento_idNucleo_Atendimento = $Nucleo_Atendimento_idNucleo_Atendimento;
    }


}
