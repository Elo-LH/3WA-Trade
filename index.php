<?php

 require "connexion.php";



    if (!array_filter($_GET)){
     
        $template = "index.phtml";
        require "layout.phtml";
        
    }else{

        if(isset($_GET['cat']) ){
            $param = $_GET['cat'];
            if(isset($_COOKIES['color'])){
                $color = $_COOKIES['color'];
             }else {
                $color = "%00000000";
            };
            $template = "category.phtml";
            require "layout.phtml";
        }else{
            echo 'Enter alternative';
            setcookie('color', $_GET['color'], time() + 365*24*3600); 
            print_r($_COOKIES);
            echo $_COOKIES['color'];
            if(isset($_COOKIES['color'])){
                $color = $_COOKIES['color'];
                echo 'Enter cookie';
             }else {
                $color = "%00000000";
                echo 'Enter white';
            };
            $template = "index.phtml";
            require "layout.phtml";
        }
        
       
       

    }
   
?>