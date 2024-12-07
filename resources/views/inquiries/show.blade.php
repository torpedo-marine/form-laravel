@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>お問い合わせ詳細</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>お名前:</strong> {{ $inquiry->name }}</p>
                <p><strong>メールアドレス:</strong> {{ $inquiry->email }}</p>
                <p><strong>性別:</strong> {{ $inquiry->gender }}</p>
                <p><strong>お問い合わせの種類:</strong> {{ $inquiry->inquiry_type }}</p>
                <p><strong>内容:</strong> {{ $inquiry->message }}</p>
                <p><strong>作成日時:</strong> {{ $inquiry->created_at }}</p>
            </div>
        </div>

        <a href="{{ route('inquiries.index') }}" class="btn btn-secondary mt-3">戻る</a>
    </div>
@endsection
