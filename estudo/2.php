<?php
// retomando a sessão criada:
 session_start();
// ecoando os dados gravados na sessão:
 echo "Os dados recebidos foram:<br><br>";
 echo "Nome: " . $_SESSION['nome'] . "<br>";
 echo "Sobrenome: " . $_SESSION['sobrenome'];
?>