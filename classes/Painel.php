<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 05/02/2018
 * Time: 00:22
 */

class Painel{
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }

    public static function loggout(){
//        unset($_SESSION);
        session_destroy();
        header('Location: '.INCLUDE_PATH_PAINEL);
    }

    public static function carregarPagina(){
        if (isset($_GET['url'])){
            $url = explode('/',$_GET['url']);
            if (file_exists('pages/'.$url[0].'.php')){
            include ('pages/'.$url[0].'.php');
            }else{
                //Quando a página não existe!
                header('Location: '.INCLUDE_PATH_PAINEL);
            }
        }else{
            include ('pages/home.php');
        }
    }
}