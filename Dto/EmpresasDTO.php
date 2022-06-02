<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresasDTO
 *
 * @author Daniela
 */;
class EmpresasDTO {
    //put your code here
    
    private $idEmpresas; 
    private $cnpj ;
    private $razao_social; 
    private $nome_fantasia;
    private $endereco; 
    private $cidade;
    private $cep; 
    private $uf; 
    private $segmento; 
    private $tipo_empresa; 
    private $email; 
    private $website; 
    private $telefone_local; 
    private $nome_empresario;  
    private $telefone_pessoal; 
    private $Nucleo_Atendimento_idNucleo_Atendimento;
    
    function getIdEmpresas() {
        return $this->idEmpresas;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getRazao_social() {
        return $this->razao_social;
    }

    function getNome_fantasia() {
        return $this->nome_fantasia;
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

    function getSegmento() {
        return $this->segmento;
    }

    function getTipo_empresa() {
        return $this->tipo_empresa;
    }

    function getEmail() {
        return $this->email;
    }

    function getWebsite() {
        return $this->website;
    }

    function getTelefone_local() {
        return $this->telefone_local;
    }

    function getNome_empresario() {
        return $this->nome_empresario;
    }

    function getTelefone_pessoal() {
        return $this->telefone_pessoal;
    }

    function getNucleo_Atendimento_idNucleo_Atendimento() {
        return $this->Nucleo_Atendimento_idNucleo_Atendimento;
    }

    function setIdEmpresas($idEmpresas): void {
        $this->idEmpresas = $idEmpresas;
    }

    function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    function setRazao_social($razao_social): void {
        $this->razao_social = $razao_social;
    }

    function setNome_fantasia($nome_fantasia): void {
        $this->nome_fantasia = $nome_fantasia;
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

    function setSegmento($segmento): void {
        $this->segmento = $segmento;
    }

    function setTipo_empresa($tipo_empresa): void {
        $this->tipo_empresa = $tipo_empresa;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setWebsite($website): void {
        $this->website = $website;
    }

    function setTelefone_local($telefone_local): void {
        $this->telefone_local = $telefone_local;
    }

    function setNome_empresario($nome_empresario): void {
        $this->nome_empresario = $nome_empresario;
    }

    function setTelefone_pessoal($telefone_pessoal): void {
        $this->telefone_pessoal = $telefone_pessoal;
    }

    function setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento): void {
        $this->Nucleo_Atendimento_idNucleo_Atendimento = $Nucleo_Atendimento_idNucleo_Atendimento;
    }



}
