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
1. インポートしたディストリビューションに入る
```
wsl -d ディストリビューション名
e.g.)wsl -d docker_settings
```

1. ./setup.shを実行する
