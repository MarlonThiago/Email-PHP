<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Mail</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="img/e-mail.png">>
</head>
<body >

<div class="login-page">
  <div class="form">
    <!--formulario da pagina de entrada do site-->
    <h1>Login</h1>
    <form class="register-form" method="POST" action="entrar.php">
      <input type="text" required placeholder="E-mail"/>      
      <input type="text" required placeholder="Senha"/> 
      <button>create</button>
      <p class="message">Não tenho cadastro!<a href="index.php">Clique aqui!</a></p>
    </form>
    <form class="login-form" method="POST" action="entrar.php">
      <input type="email" name="femail" required placeholder="E-mail"/> 
      <input  type="password" name="fsenha" required placeholder="Senha"/>
      <button>log-in</button>
      <p class="message">Não possuo cadastro!<a href="index.php">Clique aqui!</a></p>
    </form>
  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>