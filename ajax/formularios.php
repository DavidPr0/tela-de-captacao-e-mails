<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 30/01/2018
 * Time: 23:46
 */


    include ('../Config.php');

    $data = array();
    $assunto = 'Nova mensagem do formulário STARTEC';
    $corpo = '';
    var_dump($_POST);
    foreach ($_POST as $key =>$value){
        $corpo.=ucfirst($key).": " .$value;
        $corpo.="<hr>";
    }

    $info = array('assunto'=>$assunto, 'corpo'=>$corpo);
    $mail = new Email('smtp.weblink.com.br','david.santos@startecti.com.br', 'David@140809', 'David');
    $mail->addAdress('david.santos@startecti.com.br', 'David'); //conta
    $mail->formatarEmail($info);
    if ($mail->enviarEmail()){
        $data['sucesso'] = true;
    }else{
        $data['erro'] = true;
    }

//    $data['retorno'] = 'sucesso';

//    echo $data;exit;
    die(json_encode($data));

?>