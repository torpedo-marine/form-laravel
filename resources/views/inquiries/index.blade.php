@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin</h1>

        <!-- 検索フォーム -->
        <form method="GET" action="{{ route('inquiries.index') }}">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="name" value="{{ $searchData['name'] ?? '' }}" class="form-control" placeholder="名前で検索">
                </div>
                <div class="col-md-3">
                    <input type="text" name="email" value="{{ $searchData['email'] ?? '' }}" class="form-control" placeholder="メールアドレスで検索">
                </div>
                <div class="col-md-2">
                    <select name="gender" class="form-control">
                        <option value="全て">性別</option>
                        <option value="男性" {{ (isset($searchData['gender']) && $searchData['gender'] == '男性') ? 'selected' : '' }}>男性</option>
                        <option value="女性" {{ (isset($searchData['gender']) && $searchData['gender'] == '女性') ? 'selected' : '' }}>女性</option>
                        <option value="その他" {{ (isset($searchData['gender']) && $searchData['gender'] == 'その他') ? 'selected' : '' }}>その他</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="date" name="date" value="{{ $searchData['date'] ?? '' }}" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" name="inquiry_type" value="{{ $searchData['inquiry_type'] ?? '' }}" class="form-control" placeholder="お問い合わせの種類">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">検索</button>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('inquiries.index') }}" class="btn btn-secondary">リセット</a>
                </div>
            </div>
        </form>

        <hr>

        <!-- 検索結果 -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>メールアドレス</th>
                    <th>性別</th>
                    <th>お問い合わせの種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->name }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td>{{ $inquiry->gender }}</td>
                        <td>{{ $inquiry->inquiry_type }}</td>
                        <td>
                            <a href="{{ route('inquiries.show', $inquiry->id) }}" class="btn btn-info">詳細</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- ページネーション -->
        {{ $inquiries->links() }}
    </div>
@endsection
