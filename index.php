<?php
 require "connexion.php";


 if(isset($_COOKIE['color'])){
    $color = $_COOKIE['color'];
 }else {
    $color = "%00000000";
};


    if (!array_filter($_GET)){
        $template = "index.phtml";
        require "layout.phtml";
    }else{
        if(isset($_GET['cat']) ){
            $param = $_GET['cat'];
            $template = "category.phtml";
            require "layout.phtml";
        }else if(isset($_GET['cookie']) ){
            setcookie('color'); 
            unset($_COOKIE['color']);
            $template = "index.phtml";
            require "layout.phtml";
        }else{
            setcookie('color', $_GET['color'], time() + 365*24*3600,  '/' ); 
            $_COOKIE['color'] = $_GET['color'];
            $color = $_COOKIE['color'];
            $template = "index.phtml";
            require "layout.phtml";
        }
    }
?>