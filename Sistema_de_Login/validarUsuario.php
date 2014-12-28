
<?php

include ("conexao.php");

$username  = $_POST["usuario"]; // nome do usuário
$password  = $_POST["senha"];   // senha
$post      = $_POST["post"];    // botão

if ($post == "entrar"){ // se o botão entrar for clicado 
   
   // se os campos estiverem vazio
   if (empty($username) or empty($password)) { 
   	  // uma janela de alerta informa que os dados é inválido e retorna a página anterior
   	  print "<script>alert('Preencha o campo vazio.');history.back();</script>"; 
   }else{
      // comando SQL para selecionar os dados
      $query = "SELECT * FROM tbl_usuarios WHERE usuario = '$username' AND senha = '$password'";
      // executa a query
      $dados = mysql_query($query, $connect) or die(mysql_error());
      // traz o resultado da consulta acima em numérico 0 ou 1
      $number = mysql_num_rows($dados);

      if ($number==0) { //se o número for negativo "0"
         // entra na página que informa que o usuário ou senha é inválida
         header("location: acessoNegado.php");
      } else {
         // se positivo entra em outra página onde poderá ter todo o acesso
         header("location: entrada.php");
      }
   }
}
// fecha conexão com o banco de dados
mysql_close(); 
?>