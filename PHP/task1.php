<h1>1人掲示板</h1>

<!-- 初期表示 -->
<h4>
<?php
if(!isset($_REQUEST['name']) && ! isset($_REQUEST['message'])){
 echo '一回だけ投稿できます';
}
?>
</h4>

<!-- 入力内容表示 -->
<h4><?php
if (isset($_REQUEST['name'])) {
   $name = $_REQUEST['name'];
   echo $name.'さんの投稿';
}
?></h4>
<?php
if(isset($_REQUEST['message'])){
   $message = $_REQUEST['message'];
  echo $message;
}
?>

<form action="" method="post">
<br>
Name
<br>
<input type="text" name="name" required>
<br>
Message
<br>
<input type="text" name="message" required>
<br>
<br>
<input type="submit" value="送信">
</form>