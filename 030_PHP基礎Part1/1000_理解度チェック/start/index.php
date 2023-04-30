<?php 
/**
 * 何か商品を買った際に合計金額を表示するための
 * プログラムを作成してみましょう。
 * 
 * $price: 一つ当たりの価格（$price >= 0の整数値）
 * $amount: 買った個数（$amount >= 0の整数値）
 * $sum: 合計金額
 * 
 * 表示フォーマット
 * 合計金額が0円より大きい場合
 * 「○○円の商品を○○個買ったので合計金額は○○円です。 」と表示
 * 
 * 合計金額が0円の場合
 * 「何か商品を買いましょう。」と表示
 */

 $price = 1000;
 $amount = 0;
 $sum = $price * $amount;

 if($sum){
    echo" {$price}円の商品を {$amount} 個買ったので合計金額は {$sum} 円です。";
 } else {
    echo "何か商品を買いましょう。";
 }
 
