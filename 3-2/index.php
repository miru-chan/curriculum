<?php

$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];
define("TAX",1.1);

function getPrice($unitPrice,$goods) {
  $price = $unitPrice * TAX;
  print $goods."の税込み価格は".$price."円です";
  print "<br>";
}

foreach ($products as $key => $value) {
  getPrice($value,$key);
}

?>