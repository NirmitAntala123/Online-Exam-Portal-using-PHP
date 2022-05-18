<?php

use PHPMailer\PHPMailer\PHPMailer;

include("database.php");
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

if (isset($_POST['submit'])) {
  // $name = $_POST['name'];
  $email = $_POST['email'];
  $stmt = $db->query("select email from regdetails where email = '$email'");
  $row = $stmt->fetch(PDO::FETCH_BOTH);
  // $email1 = $row[0];
  $check = $stmt->rowCount();
  if ($check>0) {
    // $message = $_POST['message'];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr(str_shuffle($chars), 0, 8);
    $pass=base64_encode($password);
    // echo $password;
    $sql = $db->query("UPDATE public.regdetails SET password ='$pass' WHERE email = '$email'");
    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'nantala114@rku.ac.in'; // Gmail address which you want to use as SMTP server
      $mail->Password = 'Ang40275@*'; // Gmail address Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';
      $mail->setFrom('nantala114@rku.ac.in'); // Gmail address which you used as SMTP server
      $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
      $mail->isHTML(true);
      $mail->Subject = 'Exam Portal Password';
      $mail->Body = "Email: $email <br>Password : $password</h3>";
      $mail->send();
      $alert = '<div class="alert-success">
                 <span>Password send in your email Id</span>
                </div>';
    } catch (Exception $e) {
      $alert = '<div class="alert-error">
                <span>' . $e->getMessage() . '</span>
              </div>';
    }
  }else{
    echo '<script>alert("Invalid Email")</script>';
  }
}
?>