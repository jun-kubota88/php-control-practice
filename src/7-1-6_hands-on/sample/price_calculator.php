<?php
// 商品情報の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 計算処理
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

// 結果の表示
echo "商品名: " . $product_name . "<br>";
echo "単価: " . $price . "円<br>";
echo "数量: " . $quantity . "個<br>";
echo "小計: " . $subtotal . "円<br>";
echo "消費税(" . ($tax_rate * 100) . "%): " . $tax_amount . "円<br>";
echo "<strong>合計金額: " . $total . "円</strong><br>";
?>