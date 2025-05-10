
# 開発環境初期構築後に必要な権限・キャッシュ関連コマンド

## 発生しやすいエラー

環境構築したのに画面が表示されず、ストレージやセッションエラーが出た場合

- `storage/logs/laravel.log` に書き込みできない  
  → ログ出力時に失敗し、画面が表示されない

- `storage/framework/sessions` にセッションファイルを書き込めない  
  → ユーザー登録・ログインなどセッションが必要な処理でエラー

## 対応方法

以下の手順でパーミッションとキャッシュ関連を修正してください。

### 1. コンテナに入る

```bash
docker compose exec php bash
```

### 2. 権限の修正

```bash
chmod -R 777 /var/www/storage
chown -R www-data:www-data /var/www/storage
```

### 3. Laravel のキャッシュクリア

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

以上のコマンドを実行後、ブラウザで再度アクセスしてください。


[README.md](../README.md)戻る
