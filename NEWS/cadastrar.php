<?php
    require_once 'conexao.php';

    if(session_id() == '') {
         // checka se tem sessão, se a não tiver sessão , inicia a session
        session_start();
    }      

     $wnome = $_POST['fnome']; 
     $wemail = $_POST['femail'];
     $wsenha = $_POST['fsenha'];

    //---------------------------------------------------------
    $sql = "SELECT * FROM usuario where email='$wemail'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll(); 
    echo $wemail;

    if (!$rows) { 
        try{

            $sql = "insert into usuario(nome,email,senha)
                    values(:snome,:semail,:ssenha)";
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":snome", $wnome);  
            $stmt->bindParam(":semail", $wemail);
            $stmt->bindParam(":ssenha", $wsenha);   
            $stmt->execute();
            //return $stmt;
            
            echo("<script>");
            echo("alert('Cadastrado feito com sucesso!');");
            echo("location.href='index.php';");
            echo("</script>");
          

        }catch(PDOException $e){
            echo("Error: ".$e->getMessage());
        }finally{
            $this->conn = null;    
        }
        
    }else{
        echo("<script>");
            echo("alert('Este email já consta em nosso sistema!');");
            echo("location.href='index.php';");
            echo("</script>");
    } 
?>