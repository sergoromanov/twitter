<?php
$conn = mysqli_connect('127.0.0.1', 'root','','sergey_tue_17');
$sql = "INSERT INTO tweet (logo, text, title, img) VALUES ('images/avatar.jpg', '".$_POST['text']."', 'Sergey' , 'images/habr.jpg')";
mysqli_query($conn, $sql);
header('Location: http://serhotweet/index.php');
?>s