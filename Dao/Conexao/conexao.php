<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao
 *
 * @author Daniela
 */

class conexao {
    //put your code here Shalke-XII
    
     private static $instance;

    /**
     * 
     * @return PDO
     */
    public static function getInstance() {
        try {
            if (!isset(self::$instance)) {
                //self::$instance = new PDO("mysql:host=localhost;dbname=ShalkeXII;charset=UTF8", "root", "");
				self::$instance = new PDO("pgsql:host=localhost;port=5432;dbname=ShalkeXII;", "postgres", "123456");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $exc) {
            echo "Erro ao conectar o banco de dados :" . $exc->getMessage();
        }
    }

}

?>

