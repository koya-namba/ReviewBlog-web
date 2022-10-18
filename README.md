# 復習会問題〜全体の流れ部門〜

## 概要
復習会運営のための知識をまとめておく．

## 環境構築
[全体の流れ部門に参加する方【Laravel 9】](https://notepm.jp/sharing/86fd9e6c-1c51-4dbf-bf83-bd5d51a676ad)
[追加で全体の流れ部門に参加する方【Laravel 9】](https://notepm.jp/sharing/39d06aba-2a77-467d-a63f-5a7c09a486c4)

## 問題
[復習会問題〜全体の流れ部門〜](https://notepm.jp/sharing/fcaffaf4-7446-4888-a657-7a5bc32e60a4)

## メモ：インストール
初期設定
```bash
git clone git@github.com:koya-namba/ReviewBlog-web.git
cd ReviewBlog-web
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
```

.envを設定
```.env
DB_DATABASE=blog
DB_USERNAME=dbuser
DB_PASSWORD={db_password}
```

実行する
```bash
php artisan migrate:fresh --seed
php artisan serve --port=8080
```
以上！
