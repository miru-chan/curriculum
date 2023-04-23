<?php

  $my_name = $_POST['my_name'];
  $num = $_POST['num'];

  $answer = $num * mt_rand(1, 6);

  switch ($answer) {
    case $answer >= 1 && $answer <= 10;
      $omikuji = "凶";
      break;

    case $answer >= 11 && $answer <= 15;
      $omikuji = "小吉";
      break;
    
    case $answer >= 16 && $answer <= 20;
      $omikuji = "中吉";
      break;
    
    case $answer >= 21 && $answer <= 25;
      $omikuji = "吉";
      break;

    case $answer >= 26 && $answer <= 36;
      $omikuji = "大吉";
      break;
    
    case $answer >=37;
        $omikuji = "残念";
        break;
  }

  date_default_timezone_set('Asia/Tokyo');

  echo date("Y-m-d H:i:s", time());
  echo "<br>";
  echo "名前は".$my_name."です";
  echo "<br>";
  echo "番号は".$answer."です";
  echo "<br>";
  echo "結果は".$omikuji."です";

  ?>