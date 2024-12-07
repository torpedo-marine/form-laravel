<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認ページ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>確認ページ</h2>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>お名前</label>
                <p>{{ $validated['name'] }}</p>
                <input type="hidden" name="name" value="{{ $validated['name'] }}">
            </div>

            <div class="form-group">
                <label>性別</label>
                <p>{{ $validated['gender'] }}</p>
                <input type="hidden" name="gender" value="{{ $validated['gender'] }}">
            </div>

            <div class="form-group">
                <label>メールアドレス</label>
                <p>{{ $validated['email'] }}</p>
                <input type="hidden" name="email" value="{{ $validated['email'] }}">
            </div>

            <div class="form-group">
                <label>電話番号</label>
                <p>{{ $validated['phone'] }}</p>
                <input type="hidden" name="phone" value="{{ $validated['phone'] }}">
            </div>

            <div class="form-group">
                <label>住所</label>
                <p>{{ $validated['address'] }}</p>
                <input type="hidden" name="address" value="{{ $validated['address'] }}">
            </div>

            <div class="form-group">
                <label>お問い合わせの種類</label>
                <p>{{ $validated['inquiry_type'] }}</p>
                <input type="hidden" name="inquiry_type" value="{{ $validated['inquiry_type'] }}">
            </div>

            <div class="form-group">
                <label>お問い合わせ内容</label>
                <p>{{ $validated['message'] }}</p>
                <input type="hidden" name="message" value="{{ $validated['message'] }}">
            </div>

            <button type="submit">送信</button>
        </form>
        <a href="{{ route('contact.form') }}">修正する</a>
    </div>
</body>
</html>
