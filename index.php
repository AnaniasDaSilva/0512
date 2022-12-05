<?php session_start()

  /*

  login de um usuario

  */


  ?>

<!DOCTYPE html>
<html>
 <head>
   <title>Login de Um Usuário</title>
 </head>

  <body>

    <?php

if(!isset($_SESSION[ 'login'])){

  if(isset($_POST['acao'])) {
  $login = 'luvadepedreiro';
  $senha = 'obrigadomeudeus';

  $loginform = $_POST['login'];
  $senhaform = $_POST['senha'];

  if($login == $loginform && $senha == $senhaform) {
     //o usuario logara com sucesso
    $_SESSION['login'] = $login;
      header('Location: index.php');
   } else {
      echo 'Dados Inválidos';
  }
    
   } 
include ( 'login.php');


} else {

  if(isset($_GET['logout'])) {
    unset($_SESSION['login']);
    session_destroy();
    header('Location: index.php');
  }

  include('home.php');
}

  ?>
 </body> 
</html>