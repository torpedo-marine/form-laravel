<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Register</title>
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
    
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="名前" required>
            <input type="email" name="email" placeholder="メールアドレス" required>
            <input type="password" name="password" placeholder="パスワード" required>
            <input type="password" name="password_confirmation" placeholder="パスワード（確認用）" required>
            <button type="submit">登録</button>
        </form>
        <a href="{{ route('login') }}">ログイン画面はこちら</a>
    </div>
</body>
</html>
