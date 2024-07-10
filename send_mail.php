<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'anct.esports.labo@gmail.com'; // ここにあなたのメールアドレスを入力してください
    $subject = 'お問い合わせフォームからのメッセージ';
    $body = "名前: $name\nメール: $email\nメッセージ:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージが送信されました。";
    } else {
        echo "メッセージの送信に失敗しました。";
    }
} else {
    echo "無効なリクエストです。";
}
?>