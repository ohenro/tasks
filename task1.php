<h1>1人掲示板</h1>

<!-- GETリクエストでの表示内容 ※URLに「?name=〇〇」か「?message=〇〇」を付加して投げる -->
<h4>
<?php
  if(isset($_GET['name']) || isset($_GET['message'])){
    echo '一回だけ投稿できます';
  }
?>
</h4>

<!-- POSTリクエストでの表示内容 ※URLには何も付加しない -->
<h4><?php
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo $name.'さんの投稿';
  }
?></h4>
<?php
  if(isset($_POST['message'])){
    $message = $_POST['message'];
    echo $message;
  }
?>

<!-- URLを上書き -->
<form action="task1.php" method="post">
  <br>
  Name
  <br>
  <input type="text" name="name" required>
  <br>
  Message
  <br>
  <input type="text" name="message" required>
  <br><br>
  <input type="submit" value="送信">
</form>