<?php
if(isset($_POST['name'])){
$data=$_POST['name']." | ".$_POST['email']." | ".$_POST['msg']."\n";
file_put_contents("messages.txt",$data,FILE_APPEND);
header("Location:index.php");
exit();
}
?>
