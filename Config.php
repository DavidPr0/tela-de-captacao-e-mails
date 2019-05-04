<?php
date_default_timezone_set('America/Sao_Paulo');

	$autoload = function($class){

       // include ('classes/phpmailer/PHPMailerAutoload.php');
		// if($class == 'Email'){
		// 	require_once('Library/PHPMailer/vendor/autoload.php');
		// 	// echo "string2";exit;
		// }

        require_once('classes/'.$class.'.php');

	};

    spl_autoload_register($autoload);