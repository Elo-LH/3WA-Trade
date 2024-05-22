<?php
 require "connexion.php";
  

    if (!array_filter($_GET)){
     
        require "index.phtml";
        
    }else{
        $param = $_GET['cat'];
       
        require "category.phtml";
    }
   
?>