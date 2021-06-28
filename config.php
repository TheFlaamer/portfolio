<?php 

	session_start();
	date_default_timezone_set("America/Sao_Paulo");
	
	$autoload = function($class) {
		include('class/'.$class.'.php');
	};
	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/Meu%20Portfolio/');

	
	/*define('HOST', 'localhost');
	define('DATABASE', 'treinando_solo');
	define('USER', 'root');
	define('PASS', '');*/
	

	define('NOME_EMPRESA','Foguinho');
?>