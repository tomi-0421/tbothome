<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // メールの送信
    $to = "chochogames0421@gmail.com";
    $subject = "お問い合わせがありました";
    $headers = "From: $email";

    // メール本文
    $mailBody = "名前: $name\n";
    $mailBody .= "メールアドレス: $email\n";
    $mailBody .= "メッセージ:\n$message";

    // メールの送信
    mail($to, $subject, $mailBody, $headers);

    // 送信後のリダイレクトなどを行う（必要に応じて）
    header("Location: thank-you.html");
    exit();
}
?>
