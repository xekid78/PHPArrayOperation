# PHPArrayOperation
配列操作

## 処理
配列の内容を追加、変更、削除を行います。

## コード
```
<?php
$team = ["佐藤","鈴木","田中","岸田","有森"];
print_r($team);
echo "\n";
echo "チームは".count($team)."人です。\n";
echo "\n";

echo "*** 追加 ***\n";
array_push($team, "田川");
print_r($team);
echo "\n";
echo "チームは".count($team)."人です。\n";
echo "\n";

echo "*** 変更 ***\n";
$team[0] = "後藤";
print_r($team);
echo "\n";
echo "チームは".count($team)."人です。\n";
echo "\n";

echo "*** 削除 ***\n";
unset($team[2]);
print_r($team);
echo "\n";
echo "チームは".count($team)."人です。\n";
```

## 出力結果  
```
Array
(
    [0] => 佐藤
    [1] => 鈴木
    [2] => 田中
    [3] => 岸田
    [4] => 有森
)

チームは5人です。

*** 追加 ***
Array
(
    [0] => 佐藤
    [1] => 鈴木
    [2] => 田中
    [3] => 岸田
    [4] => 有森
    [5] => 田川
)

チームは6人です。

*** 変更 ***
Array
(
    [0] => 後藤
    [1] => 鈴木
    [2] => 田中
    [3] => 岸田
    [4] => 有森
    [5] => 田川
)

チームは6人です。

*** 削除 ***
Array
(
    [0] => 後藤
    [1] => 鈴木
    [3] => 岸田
    [4] => 有森
    [5] => 田川
)

チームは5人です。
```
  
## 開発環境
| 開発ツール |  |
|:-|:-|
| OS | Windows10 |
| 仮想化ソフト | Oracle VM VirtualBox 5.2 |
| 構築ソフト | Vagrant 2.0.2 |
| 仮想化上OS | CentOS 6.9 |
| SSHクライアント | PuTTY 0.6.8 |
| FTPクライアント | Cyberduck 6.3.5 |
| エディタ | Atom 1.24.0 |
| 開発言語 | PHP 7.1.15 |
