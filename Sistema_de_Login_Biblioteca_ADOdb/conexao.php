<?php
   // Inclui a biblioteca ADODB5
   include("adodb5/adodb.inc.php");

   // definições
   $host  = "localhost"; // localhost - endereço do servidor
   $user  = "root";      // usuário
   $pass  = "";          // senha
   $banco = "teste";     // banco
   
   // podemos escolher diversos bancos como PostgreSQL, Oracle, Firebird e outros.
   $db = NewADOConnection('mysql'); // criando um objeto de conexão ao banco de dados MySQL e armazenando na variável $db
   $conn = $db->Connect($host, $user, $pass, $banco); // definindo uma conexão não persistente

   if (!$conn) { // verifica se a variável corresponde
      // senão, um alerta informará que não foi possível conectar e irá retornar a página anterior.
      print "<script>alert('Erro na conexão com o servidor.');window.history.go(-1);</script>";
   }
?>