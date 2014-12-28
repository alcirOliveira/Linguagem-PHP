<!DOCTYPE html>
<html>
<!-- codificação de caracteres, corrige acentuações. -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de login</title>
<head>

<!-- Estilo CSS -->
<style type="text/CSS">
   #raiz{			
      position:absolute;
      top:50%;
      left:50%;
      width:480px;
      height:260px;
      margin-left:-250px;
      margin-top:-150px;
      text-align:center;
      border-bottom: 5px;
      background-color: #CCCCCC;
   }

   h2{
      align:center;
      width:100%;
      margin-top: 40px; 
      margin-bottom:80px;
      font-family:Arial; 
      border-bottom:3px solid #3399FF; 
      font-size:22px;
   }

   .img { 
      float:left; 
      margin-left:50px;
      margin-top:-40px;
   }
	
   .login{
      float:left;
      width:340px;
      margin-left:20px;		
   }
	
   .login p{
      margin-top:-35px;
      margin-left:15px;
      float:left;
      font-size:20px
   }
</style>

</head>
<body bgColor='#6c6c7d'>
<div id="raiz">
   <h2>Acesso Negado</h2>
   <div class="img"><img src="acesso_negado.jpg"></div>
      <div class="login">
         <p><b>Usuário ou Senha Inválida!</b><br><br></p>
         <p><a href="index.php">Clique aqui</a> para efetuar o login!</p>
      </div>
   </div>
</body>
</html>
