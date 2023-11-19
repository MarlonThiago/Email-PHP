<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Mail</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="img/e-mail.png">>
</head>
<body>
<!--Pagina de cadastro do site -->

<div class="login-page">
  <div class="form">
    <h1>Cadastrar</h1>
    <form class="register-form" method="POST" action="cadastrar.php">
      <input type="text" required placeholder="Seu nome"/>
      <input type="text" required placeholder="E-mail"/>      
      <input type="text" required placeholder="Senha"/> 
      <button>create</button>
      <p class="message">Já possuo uma conta!<a href="login.php">Clique aqui!</a></p>
    </form>

    <form class="login-form" method="POST" action="cadastrar.php">
      <input type="text" required name="fnome" placeholder="Seu nome"/>
      <input type="text" required name="femail" placeholder="E-mail"/> 
      <input type="text" style="-webkit-text-security: circle" name="fsenha" placeholder="Senha"/>
      <button>login</button>
      <p class="message">Já possuo uma conta!<a href="login.php">Clique aqui!</a></p>
    </form>
  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
