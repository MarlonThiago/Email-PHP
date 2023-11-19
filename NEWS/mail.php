<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="32x32" href="img/e-mail.png">
        <link rel="stylesheet" href="css/features.css">
        <link rel="stylesheet" type="text/css" href="mail.css" media="screen">
        <title>Mail</title>
    </head>
    <body>   
    <div class="area"> 
        <!--titulo da tela-->
        <div>
            <h1 id="titulo">Enviar emails</h1>
            <br>
            <p id="subtitulo">Complete a tabela para fazer o envio </p>
            <br>
        <!--form para envio das informações-->
        <form method="POST" action="envia.php">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="sobrenome"><strong>De: </strong></label>
                    <input type="text" name="naame" id="name" placeholder="De: " >
                </div>
            </fieldset> 
            <div class="campo">
                <label for="email"><strong>Assunto: </strong></label>
                <input type="text" name="emaiil" placeholder="Assunto" >
            </div>
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Texto: </strong></label>
                <textarea rows="6" style="width: 30em" id="experiencia" name="experiencia"></textarea>
                <br>
                <input name="anexo" class= "botao2" type ="file">
            </div>
            <!--botão de envio das informações do formulario-->
            <button class="botao" type="submit">Enviar</button>
        </form> 
      </div>
    </body>
</html>
