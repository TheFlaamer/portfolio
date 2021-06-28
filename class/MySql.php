<?php 
    class MySql{
        private static $pdo;

		public static function conectar(){
			if(self::$pdo == null){
				//se for null ele nao existe
				try{
				self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo '<h2>Erro ao se conectar com o banco de dados!</h2>';
                    // personaliza o erro
                    //caso algo aconteça com a hospedagem, ela iria retornar as informacoes da linha de instanciar o PDO
                    //ou seja, retornaria a senha
                    //assim impossibilita isso!
				}
			}

			return self::$pdo;
		}
        public static function teste(){
            echo 'sim';
        }
    }
?>