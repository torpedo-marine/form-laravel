環境構築<br>
Dockerのビルド プロジェクトのルートディレクトリに移動し、以下のコマンドを実行してDockerコンテナをビルドします。<br>
    　docker-compose build<br>
コンテナの起動 Dockerコンテナを起動するには、以下のコマンドを使用します。<br>
    　docker-compose up -d<br>
マイグレーションの実行 データベースのマイグレーションを実行します。<br>
   　 docker-compose exec app php artisan migrate<br>
シーディングの実行 初期データをシーディングするには、以下のコマンドを実行します。<br>
   　 docker-compose exec app php artisan db:seed<br><br>
使用技術(実行環境)<br>
・Laravel 8.x<br>
・Docker (コンテナ管理)<br>
・MySQL (データベース)<br>
・PHP 7.x以上<br>
・Composer (依存関係管理)<br>
URL<br>
・開発環境：http://localhost/<br>
