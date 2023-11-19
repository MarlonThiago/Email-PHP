<?php
    require_once 'conexao.php';

    if(session_id() == '') {
         // checka se tem sessão, se a não tiver sessão , inicia a session
        session_start();
    }      

     $wemail = $_POST['femail'];
     $wsenha = $_POST['fsenha'];

    //---------------------------------------------------------
    $sql = "SELECT * FROM usuario where email='$wemail' and senha='$wsenha'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll(); 

    if ($rows) { 
            echo("<script>");
            echo("alert('Login feito com sucesso!');");
            echo("location.href='menu.html';");
            echo("</script>");

    }else{
        echo("<script>");
            echo("alert('Senha ou email incorretos!');");
            echo("location.href='login.php';");
            echo("</script>");
    } 
?>