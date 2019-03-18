<h1>1lŒf¦”Â</h1>

<!-- ‰Šú•\¦ -->
<h4>
<?php
if(!isset($_REQUEST['name']) && ! isset($_REQUEST['message'])){
 echo 'ˆê‰ñ‚¾‚¯“Še‚Å‚«‚Ü‚·';
}
?>
</h4>

<!-- “ü—Í“à—e•\¦ -->
<h4><?php
if (isset($_REQUEST['name'])) {
   $name = $_REQUEST['name'];
   echo $name.'‚³‚ñ‚Ì“Še';
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
<input type="submit" value="‘—M">
</form>