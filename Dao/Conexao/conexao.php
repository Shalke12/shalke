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
		$host = $_SERVER['HTTP_HOST'];
		$endereco = 'localhost';
		$banco = 'ShalkeXII';
		$usuario = 'postgres';
		$senha = '123456';

		if ($host == 'shalke12.herokuapp.com')	
		{
			$endereco = 'ec2-34-231-221-151.compute-1.amazonaws.com';
			$banco = 'd1esmgvap6do64';
			$usuario = 'bmxmaoiqgbunqw';
			$senha = '5d897b3b8171d1c06a4efeeff5efa37b4da32172ab4fa7a66759c5c505dd2079';
		}
		
        try {
            if (!isset(self::$instance)) {
                //self::$instance = new PDO("mysql:host=localhost;dbname=ShalkeXII;charset=UTF8", "root", "");
				self::$instance = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco;", $usuario, $senha);
			    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $exc) {
            echo "Erro ao conectar o banco de dados :" . $exc->getMessage();
        }
    }

}

?>

