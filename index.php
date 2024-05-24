<?php
 require "connexion.php";


 function getContrastColor(string $hexcolor): string
 {
    $r = hexdec(substr($hexcolor, 1, 2));
    $g = hexdec(substr($hexcolor, 3, 2));
    $b = hexdec(substr($hexcolor, 5, 2));
    $yiq = (($r * 299) + ($g * 587) + ($b * 114)) / 1000;
    return ($yiq >= 128) ? 'black' : 'white';
 };
   

 if(isset($_COOKIE['color'])){
    $color = $_COOKIE['color'];
 }else {
    $color = "%ffffff";
};


    if (!array_filter($_GET)){
        $template = "index.phtml";
        $textColor = getContrastColor($color);
        require "layout.phtml";
    }else{
        if(isset($_GET['cat']) ){
            $param = $_GET['cat'];
            $template = "category.phtml";
        $textColor = getContrastColor($color);

            require "layout.phtml";
        }else if(isset($_GET['cookie']) ){
            setcookie('color'); 
            unset($_COOKIE['color']);
            $color = "%ffffff";
            $template = "index.phtml";
        $textColor = getContrastColor($color);


            require "layout.phtml";
        }else{
            setcookie('color', $_GET['color'], time() + 365*24*3600,  '/' ); 
            $_COOKIE['color'] = $_GET['color'];
            $color = $_COOKIE['color'];
            $template = "index.phtml";
        $textColor = getContrastColor($color);

            require "layout.phtml";
        }
    }
?>