
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
      // consulta SQL para selecionar os dados
      $query = "SELECT * FROM tbl_usuarios WHERE usuario = '$username' AND senha = '$password'";
      $resultado = $db->GetRow($query); // traz o resultado da consulta acima e armazena na variável $resultado

      // verifica se o usuário e senha do banco é o mesmo digitado pelo usuário
      if($resultado['usuario'] == $username && $resultado['senha'] == $password) { 
         header("location: entrada.php"); // se positivo entra na página onde o usuário poderá ter todo o acesso
      }else{
         // senão, entra na página que informa que o usuário ou senha é inválida
         header("location: acessoNegado.php");
      }
   }
}
// fecha conexão com o banco de dados
$db->close();
?>