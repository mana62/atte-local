# 勤怠管理アプリ  Atte
・従業員の勤怠管理アプリ<br>

# 作成した目的
・人事評価のため<br>

# アプリケーションURL
<開発環境><br>
・phpmyadmin<br>
http://localhost:8080/<br>
・アプリurl<br>
http://localhost/register<br>
・dockerは.envによって切り分ける<br>
(サービスのビルド)<br>
docker compose --env-file ./src/.env.local up --build<br>
(サービスの再起動)<br>
docker compose --env-file ./src/.env.local restart<br>

<本番環境><br>
・phpmyadmin<br>
http://localhost:8080<br>
・アプリurl<br>
https://atte.ddns.net<br>
・dockerは.envによって切り分ける <br>
(サービスのビルド)<br>
docker-compose --env-file ./src/.env.prod build nginx php phpmyadmin<br>
(サービスの再起動)<br>
docker-compose --env-file ./src/.env.prod up -d --no-deps nginx phpmyadmin php<br>

# 他のリポジトリ
<開発環境><br>
https://github.com/mana62/atte-local

<本番環境><br>
https://github.com/mana62/atte-prod

# 機能一覧
・会員登録<br>
・ログイン<br>
・ログアウト<br>
・勤務開始<br>
・勤務終了<br>
・休憩開始(1日で何度も休憩が可能)<br>
・休憩終了<br>
・日付別勤怠情報取得<br>
・ページネーション(5ページずつ取得)<br>
・ユーザー一覧ページ<br>
・ユーザーごとの勤怠表ページ<br>
・メール認証

# 使用技術
・nginx: latest<br>
・php: 8.1-fpm<br>
・mysql: 8.0.26<br>
・Laravel: 8<br>

# テーブル設計
![テーブル仕様書](https://github.com/user-attachments/assets/dfd993eb-30ba-46c6-bd18-e313cedb91b4)

# ER図
![ER図 ](https://github.com/user-attachments/assets/8a6d8a73-fca7-46f6-abd1-1a06bcfe09fb)

# 環境構築
1. リモートリポジトリを作成
2. ローカルリポジトリの作成
3. リモートリポジトリをローカルリポジトリに追加
4. (docker-compose.yml) の作成
5. Nginx の設定
6. PHP の設定
7. MySQL の設定
8. phpMyAdmin の設定
9. (docker-compose up -d --build)
10. (docker-compose exec php bash)
11. (composer create-project "laravel/laravel=8.*" . --prefer-dist)
12. app.php の timezone を修正
13. .env ファイルの環境変数を変更
14. (php artisan migrate)
15. (php artisan db:seed)
16. 本番用のリモートリポジトリを作成
17. (.env.local)(.env.prod)開発、本番用.env作成
18. <開発>(docker compose --env-file ./src/.env.local up --build)<br>
<本番>(docker-compose --env-file ./src/.env.prod up --build)
19. 開発環境と本番環境の切り替え
20. AWS環境構築（ストレージをS3、バックエンドをEC2、データベースをRDS）
21. EC2内でgitをクローン
22. SSL証明書の設定

# その他


