<!-- 修正完了 -->
<h1>1人掲示板</h1>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo '<h3>'.$_POST['name'].'さんの投稿</h3>';
    echo $_POST['message'];
  }else{
    echo '<h3>一回だけ投稿できます</h3>';
  }
?>

<form action="task1.php" method="post">
  <br>
  <label for="name">Name</label>
  <br>
  <input type="text" name="name" id="name" required>
  <br>
  <label for="message">Message</label>
  <br>
  <input type="text" name="message" id="message" required>
  <br><br>
  <input type="submit" value="送信">
</form>