        <?php

        require "./PHPMailer-master/src/PHPMailer.php";
        require "./PHPMailer-master/src/SMTP.php";
        require "./PHPMailer-master/src/Exception.php";

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        $mail = new PHPMailer(true);

        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  

        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                    
        $mail->Username   = 'senamarlon26@gmail.com';  //por o email no qual ira enviar as mensagens                   
        $mail->Password   = 'lgwqhxdfvsvnqcit';                                
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             
        $mail->Port       = 587;
       

        $de=$_POST["naame"];
        $assunto=$_POST["emaiil"];
        $conteudo=$_POST["experiencia"];
    

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "news";

        // Cria conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Recupera os endereços de e-mail do banco de dados
        $sql = "SELECT  email,nome FROM cadas";
        $result = $conn->query($sql);

        $count = 0;
        $conta = 0;
         // Contador de e-mails enviados
        //Loop pelos resultados e envia a mensagem para cada endereço de e-mai
        $last_email_sent = null;
        while($row = $result->fetch_assoc()) {
              $nome = $row["nome"]; 
              $to=$row["email"] ;
                if  (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
                     $conta++;
                     continue;
                   }
                if ($to !== $last_email_sent) { 
                    $mail->setFrom("senamarlon26@gmail.com", "$de");
                    $mail->addAddress($row["email"]);
                    $mail->isHTML(true);
                    $mail->Subject = "$assunto";
                    $mail->Body = "Olá $nome,<br><br>$conteudo"; 
                    $enviados[] = $to; // Adiciona o e-mail enviado ao array de e-mails enviados
                    $last_email_sent = $to; // atualiza o endereço do último e-mail enviado
                    $mail->setLanguage('br');
                    if (isset($_FILES['anexo']) && $_FILES['anexo']['error'] === UPLOAD_ERR_OK) {
                      $mail->addAttachment($_FILES['anexo']['tmp_name'], $_FILES['anexo']['name']);
                      }
                       try {
                
                         if ($mail->send()) {
                            $count++;
                            $mail->clearAddresses();
                            if ($count % 50 == 0) {
                              sleep(15);
                          }
                       }
                    }catch (Exception $e) {
                   echo $e;
                  }
           }
        }
           echo("<script>");
           echo("alert('Foram enviados ao todo $count!');");
           echo("location.href='menu.html';");
           echo("</script>");
           $conn->close();
         
        // Executa a consulta
        ?>
