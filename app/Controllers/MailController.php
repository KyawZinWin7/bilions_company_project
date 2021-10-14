<?php

namespace App\Controllers;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use App\Controllers\Validation;

class MailController 
{

  public function send()
  {

    // validation start
    $validate = new Validation($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['body']);
    $data = $validate->validate();
    // validation end
    
    try {
      $name = $data['name'];
      $email = $data['email'];
      $subject = $data['subject'];
      $body = $data['body'];

      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = "smtp.mailtrap.io";
      $mail->SMTPAuth = true;
      $mail->Username = "b3c89d32f70108";
      $mail->Password = '1a910c214e8f48';
      $mail->Port = 2525; //2525
      $mail->SMTPSecure = "tls"; //tls
      $mail->isHTML(true);
      $mail->setFrom('noreply@nevolinastudio.com', $name);
      $mail->addAddress("aj.kumarsharno@gmail.com");
      $mail->Subject = 'Bilions Contact Email - ' . $subject;
      $mail->Body = '<h3>Name : ' . $name . '<br> Email : ' . $email . '<br> Message: ' . $body . '</h3>';

      if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";
      } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
      }
      exit(json_encode(array("status" => $status, "response" => $response)));
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }
}

