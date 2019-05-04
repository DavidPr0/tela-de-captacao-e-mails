<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 18/02/2018
 * Time: 20:57
 */

class Site {

    public static function updateUsuarioOnline(){
        if(isset($_SESSION['online'])){
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $sql = Mysql::conectar()->prepare("UPDATE tb_admin_online SET ultima_acao = ? WHERE token = ?");
            $sql->execute(array($horarioAtual,$token));
        }else{
            $_SESSION['online'] = uniqid();
            $ip = $_SERVER['REMOTE_ADDR'];
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $sql = Mysql::conectar()->prepare("INSERT INTO tb_admin_online VALUES (null,?,?,?)");
            $sql->execute(array($ip,$horarioAtual,$token));
        }
    }
}