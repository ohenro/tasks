<h1>1�l�f����</h1>

<!-- �����\�� -->
<h4>
<?php
if(!isset($_REQUEST['name']) && ! isset($_REQUEST['message'])){
 echo '��񂾂����e�ł��܂�';
}
?>
</h4>

<!-- ���͓��e�\�� -->
<h4><?php
if (isset($_REQUEST['name'])) {
   $name = $_REQUEST['name'];
   echo $name.'����̓��e';
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
<input type="submit" value="���M">
</form>