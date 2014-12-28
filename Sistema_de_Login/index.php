<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de login</title>
<head>

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
      margin-bottom:40px;
      font-family:Arial;
      border-bottom:3px solid #3399FF;
      font-size:22px;
   }

   .img {
      float:left;
      margin-left:50px;
   }

   .login{
      float:left;
      width:340px;
      margin-left:20px;
   }

   .login p{
      margin-top:-5px;
      float:left;
      font-size:20px
   }

   .input{
      margin-left:10px;
      width:220px;
      height:20px;
   }

   .entrar{
      width:120px;
      height:30px;
      font-size:18px;
      margin-top:5px;
   }
</style>

</head>
<body bgColor='#6c6c7d'>
   <div id="raiz">
      <h2>Acesso ao Banco de Dados</h2>
      <form action="validarUsuario.php" method="post" name="acesso" onsubmit="return validaCampo();">
         <div class="img"><img src="acesso.jpg"></div>
            <div class="login">
               <p>Login:<input name='usuario' type="text" class="input"/></p>
               <br><p>Senha:<input type='password' name='senha' class="input"/></p>
            </div>
            <input type='hidden' name="post" value="entrar" >
            <input type=submit value="Entrar" name=Submit class="entrar">
      </form>
   </div>
</body>
</html>