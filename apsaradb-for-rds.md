## 1.インスタンス作成
- mysql選択
- 設定はほぼでフィルトで
  - `Network Type`は`classic network`
  
## 2.接続ユーザ作成
Webコンソールから接続ユーザを作成する。

## 3.whitelistの設定、ホスト名の確認
whitelistを設定すると、RDSへの接続のホスト名がでてくる。
なので、とりあえず接続元のECSのIPを設定する。

## 4.接続
```
$ mysql -h <rds-host-name> -P <Port> -u <user> -p
```
