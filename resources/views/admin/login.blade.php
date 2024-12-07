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
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="メールアドレス" required>
            <input type="password" name="password" placeholder="パスワード" required>
            <button type="submit">ログイン</button>
        </form>
        <a href="{{ route('register') }}">登録画面はこちら</a>
    </div>
</body>
</html>