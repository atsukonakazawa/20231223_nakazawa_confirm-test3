確認テスト　　環境構築

⚫︎Dockerビルド
１ git cloneリンク
２　 docker compose up -d --build

 ⚫︎Laravel環境構築
1 docker compose exec php bash
2 composer install
3 .envをコピーし、環境変数を変更
４　　php artisan key:generate
5 php artisan migrate
6 シーディングはタイムアウトによりできませんでした

⚫︎使用技術
PHP 8.2.11
Laravel Framework 8.83.8
mysql  Ver 15.1

⚫︎URL
　開発環境：http://localhost/
 phpMyAdmin:http://localhost:8080/
