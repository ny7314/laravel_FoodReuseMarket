## 在庫管理アプリケーション　--rakuzaico--
git clone
git clone https://github.com/ny7314/laravel_rakuzaico.git

git clone時のブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/ny7314/laravel_rakuzaico.git
で実行してください。
または、zipファイルでダウンロードしてください。

## インストール方法
- cd rakuzaico
- composer install
- npm install
- npm run dev

.env.exampleをコピーして.envファイルを作成

.envファイルの中の環境を変更

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=laravel_rakuzaico
DB_USERNAME=rakuzaico
DB_PASSWORD=password123

XAMPP/MAMPまたは他の開発環境でDBを起動後

php artisan migrate:fresh --seed
を実行するとダミーデータが追加できます。

さらに、
php artisan key:generate
を入力後、

php artisan serve
で簡易サーバーを立ち上げ、画面を確認してください。


## インストール注意点

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg ~ sample6.jpgとして保存してあります。

php artisan storage:linkで
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し、
画像を保存してください。