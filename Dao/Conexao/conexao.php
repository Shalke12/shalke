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
			$endereco = 'ec2-34-225-159-178.compute-1.amazonaws.com	';
			$banco = 'd30lvosqrpe06r';
			$usuario = 'nkjcxrpjrvebuw';
			$senha = 'f17c0002ec0c1c4e204e3b786fd4674badd8f3754fef9f5c52af97b50be0f308';
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

