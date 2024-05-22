<?php

 require "connexion.php";
  

    if (!array_filter($_GET)){
     
        $template = "index.phtml";
        require "layout.phtml";
        
    }else{
        $param = $_GET['cat'];
       
        $template = "category.phtml";
        require "layout.phtml";

    }
   
?>