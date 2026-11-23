お問い合わせフォーム

概要

Laravelを使用して作成したお問い合わせフォームです。

使用技術

PHP

Laravel

MySQL

Docker

Nginx

環境構築

1. リポジトリをクローン

git clone https://github.com/kei498/contact-form.git
cd contact-form

2. Dockerコンテナを起動

docker compose up -d

3. PHPコンテナに入る

docker compose exec php bash

4. Laravelの初期設定

composer install
cp .env.example .env
php artisan key:generate

5. データベースの設定

.env のデータベース接続情報をDocker環境に合わせて設定します。

6. マイグレーション

php artisan migrate

7. アプリケーションにアクセス

ブラウザで以下を開きます。

http://localhost

機能

お問い合わせ入力

お問い合わせ内容確認

お問い合わせ送信

データベースへの保存