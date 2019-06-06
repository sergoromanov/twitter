<?php
header('Location: http://serhotweet/index.php');
$conn = mysqli_connect('127.0.0.1', 'root','','sergey_tue_17');
$inp=$_POST['in'];
echo $inp;
$sql = "DELETE FROM tweet WHERE id='$inp'";
mysqli_query($conn, $sql);

?>
