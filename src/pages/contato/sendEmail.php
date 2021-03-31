<?php
use PHPMailer\PHPMailer\PHPMailer;

  // Pegando dados do formulário para passar para o email
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //config smtp
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "Coloque aqui seu email"; //Coloque aqui seu email
    $mail->Password = 'Coloque aqui sua senha'; //Coloque sua senha
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //config email
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject = ("$assunto");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email enviado com sucesso!";
    }
    else
    {
        $status = "failed";
        $response = "Algo deu errado: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>

