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
