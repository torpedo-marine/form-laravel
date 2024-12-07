<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // 新規ユーザー作成の処理を指定
        Fortify::createUsersUsing(CreateNewUser::class);

        // 登録画面をカスタムビューで表示
        Fortify::registerView(function () {
            return view('admin.register');
        });

        // ログイン画面をカスタムビューで表示
        Fortify::loginView(function () {
            return view('admin.login');
        });
    }
}
