<?php
    require_once 'conexao.php';

    if(session_id() == '') {
         // checka se tem sessão, se a não tiver sessão , inicia a session
        session_start();
    }      

     $tnome = $_POST['nnome']; 
     $temail = $_POST['eemail'];


    //---------------------------------------------------------
    $sql = "SELECT * FROM cadas where email='$temail'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll(); 
    echo $temail;

    if (!$rows) { 
        try{

            $sql = "insert into cadas(nome,email)
                    values(:hnome,:hemail)";
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":hnome", $tnome);  
            $stmt->bindParam(":hemail", $temail);  
            $stmt->execute();
    
            
            echo("<script>");
            echo("alert('Cadastrado feito com sucesso!');");
            echo("location.href='menu.php';");
            echo("</script>");
          

        }catch(PDOException $e){
            echo("Error: ".$e->getMessage());
        }finally{
            $this->conn = null;    
        }
        
    }else{
        echo("<script>");
            echo("alert('Este email já consta em nosso sistema!');");
            echo("location.href='menu.php';");
            echo("</script>");
    } 
?>