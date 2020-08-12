# docker-settings
GUI tool to create docker-compose configuration file

## セットアップ方法

1. wslイメージを[ダウンロードする](https://www.google.com/url?q=https://drive.google.com/drive/folders/1F3u5j7U9qUmzYZm8SSHcxHDnanI-iRAm&sa=D&source=hangouts&ust=1597329542724000&usg=AFQjCNGQwWmYJl_Wo7WdBFhD8KHqHQPZ7Q)
1. wslイメージをインポートする
```
書式)wsl --import wsl_name wsl_package_dir wsl_image_file_path --vesion 2
e.g)wsl --import docker_settings C:\Users\miyagi\AppData\Local\wsl_package\docker_settings .\ubuntu1804-docker-settings.tar --version 2
事前にwsl_package_dirのフォルダは作成しておくこと
```
3. インポートしたディストリビューションに入る
```
wsl -d ディストリビューション名
e.g.)wsl -d docker_settings
```

4. ./setup.shを実行する



### マイルストーン

1. プロトタイプviewの作成
1. dockerfileデータ構造の定義
1. view側のコンポーネントでデータ構造を作成できること
  - データの定義
  - 各コンポーネントの連携し、データを生成できる
1. dockerfileを生成してダウンロードできること
  - サーバー側でデータを受け取ってdockerfileを生成し、それをフロントへ送る
  - フロント側はサーバーからもらったデータをユーザーにダウンロードできるようにする
1. herokuへホスティング
1. herokuへのCI/CD
1. docker-composeのプロトタイプviewの作成
1. docker-composeデータ構造の定義
1. view側のコンポーネントでデータ構造を作成できること
  - データの定義
  - 各コンポーネントの連携し、データを生成できる
1. docker-composeを生成してダウンロードできること
  - サーバー側でデータを受け取ってdocker-compose,dockerfileを生成し、それをフロントへ送る
  - フロント側はサーバーからもらったデータをユーザーにダウンロードできるようにする
