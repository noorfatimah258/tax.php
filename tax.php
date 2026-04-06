<?php
$phoneModel = "iPhone 13";
$basePrice = 150000;
$isImported = true;
if ($isImported == true) {
    $tax = $basePrice * 0.20; // 20% tax
    $finalPrice = $basePrice + $tax;
} else {
    $finalPrice = $basePrice;
}
echo "<h1>The final price for the $phoneModel is Rs. $finalPrice</h1>";
?>