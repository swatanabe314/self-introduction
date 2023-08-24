<?php
    session_start();
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = $_POST['email'];
    $subject = "テスト送信";
    $message = $_POST['message'];
    $headers = "From: shuji.watanabe.pl@gmail.com";
    $name = $_POST['name'];
    
    if (mb_send_mail($to, $subject, $message, $headers)) {
        $_SESSION["result"] = "success";
    } else {
        $_SESSION["result"] = "fail";
    }
    header("Location:/portfolio/self-introduction/index.php");
    exit();
?>