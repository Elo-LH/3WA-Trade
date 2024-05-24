<?php
session_start();

if (!array_filter($_POST)){
  echo 'no data retrieved from form';
}else{
    if(isset($_POST['login'])){
        $_SESSION['login'] = $_POST['login'];
    }
    if(isset($_POST['password'])){
        $_SESSION['password'] = $_POST['password'];
    }
}

if($_SESSION['login'] === 'admin' && $_SESSION['password'] === 'admin'){
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
    <h2>Vous avez trouvé le secret</h2>
    <a href="index.php?session=true">Se déconnecter</a>
    </form>
</body>
</html>
    
    <?php
}else{
    require "login.phtml";
}
?>



