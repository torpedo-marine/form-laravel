@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin</h2>

    <form action="{{ route('admin.index') }}" method="GET">
        <div class="form-group">
            <label for="name">名前やメールアドレスを入力してください</label>
            <input type="text" name="name" class="form-control" placeholder="名前やメールアドレス" value="{{ request('name') }}">
        </div>
        <div class="form-group">
            <label for="gender">性別</label>
            <select name="gender" class="form-control">
                <option value="">選択してください</option>
                <option value="男性" {{ request('gender') == '男性' ? 'selected' : '' }}>男性</option>
                <option value="女性" {{ request('gender') == '女性' ? 'selected' : '' }}>女性</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inquiry_type">お問い合わせの種類</label>
            <select name="inquiry_type" class="form-control">
                <option value="">選択してください</option>
                <option value="商品の交換について" {{ request('inquiry_type') == '商品の交換について' ? 'selected' : '' }}>商品の交換について</option>
                <option value="返品について" {{ request('inquiry_type') == '返品について' ? 'selected' : '' }}>返品について</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">年月日</label>
            <input type="date" name="date" class="form-control" value="{{ request('date') }}">
        </div>
        <button type="submit" class="btn btn-primary">検索</button>
        <button type="reset" class="btn btn-secondary">リセット</button>
    </form>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inquiries as $inquiry)
            <tr>
                <td>{{ $inquiry->name }}</td>
                <td>{{ $inquiry->gender }}</td>
                <td>{{ $inquiry->email }}</td>
                <td>{{ $inquiry->inquiry_type }}</td>
                <td><a href="{{ route('admin.show', $inquiry->id) }}" class="btn btn-info">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- ページネーション -->
    {{ $inquiries->links() }}
</div>
@endsection
