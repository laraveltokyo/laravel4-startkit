## Laravel PHPフレームワーク 日本語スケルトン版

### インストール方法

#### Laravel4.2
```Console
$ composer create-project laravel-plus/laravel4 <directory>
```

### 本家版との違い

- パッケージ指定
	- [Extension Pack - laravel-plus/laravel-extension](https://github.com/jumilla/laravel-extension/tree/laravel4)
	- [Debugbar - barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
- 既定のLaravel環境
	- local (`bootstrap/start.php`で設定)
- データベース設定
	- local: sqlite (ファイルは`app/storage/database/local.sqlite`)
	- testing: sqlite (ファイルは`app/storage/database/testing.sqlite`)
- 日本語リソース (lang/ja)
- artisanコマンド (Extension)
	- addon:setup
	- addon:make
	- addon:check
	- app:container:list
- スクリプト
	- unittest

### ライセンス

Laravelフレームワークは、[MIT ライセンス](http://opensource.org/licenses/MIT)のオープンソースソフトウェアです。
