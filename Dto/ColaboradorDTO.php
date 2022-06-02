<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColaboradorDTO
 *
 * @author Daniela
 */
class ColaboradorDTO {
    //put your code here
    
    private $idColaborador; 
    private $nome; 
    private $cpf;
    private $rg; 
    private $datanascimento; 
    private $sexo;
    private $raca; 
    private $email; 
    private $website;
    private $endereco; 
    private $cidade; 
    private $cep; 
    private $uf;  
    private $telefone; 
    private $profissao; 
    private $Perfil_idPerfil;
    private $Nucleo_Atendimento_idNucleo_Atendimento;
    
    function getIdColaborador() {
        return $this->idColaborador;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getRaca() {
        return $this->raca;
    }

    function getEmail() {
        return $this->email;
    }

    function getWebsite() {
        return $this->website;
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

    function getTelefone() {
        return $this->telefone;
    }

    function getProfissao() {
        return $this->profissao;
    }

    function getPerfil_idPerfil() {
        return $this->Perfil_idPerfil;
    }

    function getNucleo_Atendimento_idNucleo_Atendimento() {
        return $this->Nucleo_Atendimento_idNucleo_Atendimento;
    }

    function setIdColaborador($idColaborador): void {
        $this->idColaborador = $idColaborador;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setRg($rg): void {
        $this->rg = $rg;
    }

    function setDatanascimento($datanascimento): void {
        $this->datanascimento = $datanascimento;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    function setRaca($raca): void {
        $this->raca = $raca;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setWebsite($website): void {
        $this->website = $website;
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

    function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    function setProfissao($profissao): void {
        $this->profissao = $profissao;
    }

    function setPerfil_idPerfil($Perfil_idPerfil): void {
        $this->Perfil_idPerfil = $Perfil_idPerfil;
    }

    function setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento): void {
        $this->Nucleo_Atendimento_idNucleo_Atendimento = $Nucleo_Atendimento_idNucleo_Atendimento;
    }


}
