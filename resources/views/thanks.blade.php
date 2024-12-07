<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>お問い合わせいただき、ありがとうございました。</h2>
        <p>ご記入いただいた内容は正常に送信されました。<br>担当者が確認次第ご連絡いたします。</p>
        <a href="{{ route('contact.form') }}">トップページに戻る</a>
    </div>
</body>
</html>
