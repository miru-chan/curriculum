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
  $one = [ "80", "22", "21" , "20"];
  $twe = [ "PHP", "Python", "JAVA", "HTML" ];
  $three = [ "join", "select", "insert" , "update" ];
?>
<p>お疲れ様です<?php echo $my_name; ?> さん</p>

<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<?php 
  foreach ($one as $key ) { ?>
    <input type="radio" name="port" value="<?php echo $key; ?>">
    <?php echo $key; ?>
  <?php } ?>

<h2>②Webページを作成するための言語は？</h2>
<?php 
  foreach ($twe as $key ) { ?>
    <input type="radio" name="web" value="<?php echo $key; ?>">
    <?php echo $key; ?>
  <?php } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php 
  foreach ($three as $key ) { ?>
    <input type="radio" name="sql" value="<?php echo $key; ?>">
    <?php echo $key; ?>
  <?php } ?>
  <input type="hidden" name="my_name" value="<?php echo $my_name; ?>" />
  <p> <input type="submit" value="回答する" /></p>

</form>
</body>
</html>