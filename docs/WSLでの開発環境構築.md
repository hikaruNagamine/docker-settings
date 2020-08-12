---
marp:true

---

# Laravel = 6.0 の開発環境（WSL）

WSLのUbuntu18.04にて、Laravel開発環境を構築している。
WSLをインポートすることで開発環境を用意できる。

WSLでの開発環境構築人参考にしたサイト。：
 https://reffect.co.jp/laravel/wsl-laravel-install
 https://medium.com/@ifkas/how-to-install-vuetify-2-in-laravel-6-863e41ddf8d2

## WSLをダウンロード

https://drive.google.com/drive/folders/1-nRVfTqDhJ1KfgiML6qBCf0tiX9jeUZE?usp=sharing
・

## WSLをインポート

tarファイルを展開してインポートする。
※試してないので、失敗したら教えてください。

1. tar ファイルを展開
1. インポート
```bash
$ wsl --import <Distro> <InstallLocation> <FileName>
```

## WSLのユーザとパスワード

user: ssdev
pass: ssdev123

# DBの起動

```bash
$ sudo service mysql start
```