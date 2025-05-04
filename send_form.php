<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "goodfellaselektrikas@gmail.com";
    $subject = "Новое сообщение с сайта GF Elektrikas";
    
    $body = "Имя: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Сообщение: " . $message . "\n";
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
}
?> 