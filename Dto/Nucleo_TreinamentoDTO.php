<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nucleo_TreinamentoDTO
 *
 * @author Daniela
 */
class Nucleo_TreinamentoDTO {
    //put your code here
    private $idNucleo_Treinamento;
    private $nome_responsavel;
    private $telefone_responsavel;
    private $local;
    private $cidade;
    private $cep;
    private $telefone_local;
    private $uf;
    private $Nucleo_Atendimento_idNucleo_Atendimento;
    
    function getIdNucleo_Treinamento() {
        return $this->idNucleo_Treinamento;
    }

    function getNome_responsavel() {
        return $this->nome_responsavel;
    }

    function getTelefone_responsavel() {
        return $this->telefone_responsavel;
    }

    function getLocal() {
        return $this->local;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getTelefone_local() {
        return $this->telefone_local;
    }

    function getUf() {
        return $this->uf;
    }

    function getNucleo_Atendimento_idNucleo_Atendimento() {
        return $this->Nucleo_Atendimento_idNucleo_Atendimento;
    }

    function setIdNucleo_Treinamento($idNucleo_Treinamento): void {
        $this->idNucleo_Treinamento = $idNucleo_Treinamento;
    }

    function setNome_responsavel($nome_responsavel): void {
        $this->nome_responsavel = $nome_responsavel;
    }

    function setTelefone_responsavel($telefone_responsavel): void {
        $this->telefone_responsavel = $telefone_responsavel;
    }

    function setLocal($local): void {
        $this->local = $local;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    function setCep($cep): void {
        $this->cep = $cep;
    }

    function setTelefone_local($telefone_local): void {
        $this->telefone_local = $telefone_local;
    }

    function setUf($uf): void {
        $this->uf = $uf;
    }

    function setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento): void {
        $this->Nucleo_Atendimento_idNucleo_Atendimento = $Nucleo_Atendimento_idNucleo_Atendimento;
    }


}
