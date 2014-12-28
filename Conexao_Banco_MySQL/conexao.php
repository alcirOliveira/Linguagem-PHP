<?php
   // definições
   $host = "localhost"; // localhost - endereço do servidor
   $user = "root";      // usuário
   $pass = "";          // senha
   $db   = "teste";     // banco

   // conexão ao banco de dados, armazenando na variável $connect
   $connect = mysql_connect($host,$user,$pass) or print (mysql_error());
   // se as variáveis corresponderem conecta ao banco, senão será impresso uma mensagem de erro.

   // seleciona a base de dados e armazena na variável $banco
   $banco = mysql_select_db($db, $connect) or print(mysql_error());
   // caso não exista o banco, será impresso uma mensagem de erro.
   

   if ($connect && $banco) { // verifica se ambas as variáveis estão corretas
      echo "Conectado ao banco $db."; // se positivo, informa que esta conectado ao banco.
   }

   // fecha conexão com o banco de dados
   mysql_close(); 
?>
