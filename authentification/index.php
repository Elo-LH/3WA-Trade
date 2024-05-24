<?php
session_start();

if (!array_filter($_GET)){
   require "login.phtml";
  }else{
      if(isset($_GET['session'])){
         if ($_GET['session']){
            session_destroy();
            session_start();
            require "login.phtml";
         }
      }
  }

?>