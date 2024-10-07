<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your_email@example.com";
    $subject = "طلب جديد من موقع بيع الساعات";
    $body = "اسم المرسل: $name\nالبريد الإلكتروني: $email\nالموقع: $location\n\nالرسالة:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) 
        echo "تم إرسال الرسالة
