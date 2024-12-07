<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>FashionablyLate</h1>
            <h2>Contact</h2>
        </header>

        <form action="{{ route('contact.confirm') }}" method="POST">
            @csrf
    <label for="first_name">お名前 <span class="required">*</span></label>
    <div class="name-input">
        <input type="text" id="first_name" name="first_name" placeholder="例: 山田" required>
        <input type="text" name="last_name" id="last_name" placeholder="例: 太郎" required>
    </div>

            <div class="form-group">
                <label for="gender">性別 <span class="required">*</span></label>
                <div>
                    <label>
                        <input type="radio" id="male" name="gender" value="男性" required> 男性
                    </label>
                    <label>
                        <input type="radio" id="female" name="gender" value="女性" required> 女性
                    </label>
                    <label>
                        <input type="radio" id="other" name="gender" value="その他"> その他
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス <span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="例: test@example.com" required>
            </div>

            <div class="form-group">
                <label for="phone">電話番号 <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="例: 080-1234-5678" required>
            </div>

            <div class="form-group">
                <label for="address">住所 <span class="required">*</span></label>
                <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>
            </div>

            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>

            <div class="form-group">
                <label for="inquiry_type">お問い合わせの種類 <span class="required">*</span></label>
                <select id="inquiry_type" name="inquiry_type" required>
                    <option value="" disabled selected>選択してください</option>
                    <option value="service">サービスについて</option>
                    <option value="support">サポート</option>
                    <option value="other">その他</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">お問い合わせ内容 <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="お問い合わせ内容をご記入ください" required></textarea>
            </div>

            <button type="submit">確認画面</button>
        </form>
    </div>
</body>
</html>
