<?php
// ECサイトの合計金額計算
$price = 80000;      // 商品単価
$quantity = 2;      // 購入個数
$tax_rate = 0.10;   // 消費税率（10%）

// 文字列を直接出力
echo "商品名：ノートパソコン". "<br>";

// 文字列を直接出力
echo "単価：80,000円". "<br>";

// 文字列を直接出力
echo "数量：2個". "<br>";

// 小計を計算
$subtotal = $price * $quantity;
echo "小計: " . $subtotal . "円". "<br>";  // 小計:160,000円

// 消費税を計算
$subtotal = $price * $quantity * ($tax_rate);
echo "消費税（10%） " . $subtotal . "円". "<br>";  // 消費税（10%）:16,000円

// 税込み価格を計算
$total = $subtotal * (1 + $tax_rate);
echo "<strong>合計金額: " . $total . "円</strong><br>";  // 合計金額: 176,000円
?>
