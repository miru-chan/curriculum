<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 

  $my_name = $_POST['my_name'];
  $port = $_POST["port"];
  $web = $_POST["web"];
  $sql = $_POST["sql"];

  function getAnswer($answer,$correct) {
    if ($answer != $correct) {
      print "残念・・・";
    } else {
      print "正解！";
    }
  }

?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php
getAnswer($port,"80");
?>

<p>②の答え</p>
<?php
getAnswer($web,"HTML");
?>

<p>③の答え</p>
<?php
getAnswer($sql,"select");
?>

</body>
</html>