<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com";
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = $_POST['subject'];
    $message = $first_name . " " . " escreveu a seguinte mensagem:" . "\n\n" . $_POST['message'];
    $message2 = "Cópia da mensagem enviado " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Email enviado. Obrigado " . $first_name . ", entraremos em contato em breve.";
    }
?>