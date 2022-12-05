<?php

// A primeira tela que o usuario vai ver após logar

echo '<h2>Bem-vindo ' .$_SESSION['login'].'</h2>';
echo '<a href="?logout>SAIR!</a>';

?>