<meta charset="utf-8">
<form action="bca.php" method="POST">
	<input name="text" type="text" value="<?php echo $logo['text']?>">
	<button name="change" value="<?php echo $change ?>">Сохранить</button>
</form>
<?php  $connect = mysqli_connect('127.0.0.1', 'root','','sergey_tue_17');
 $change=$_POST['change'];
 $query = mysqli_query($connect, "SELECT * FROM tweet WHERE id='" . $change . "'");
 $logo=$query->fetch_assoc();
 $text=$_POST['text'];
 mysqli_query($connect ,"UPDATE tweet SET text='" . $text . "' WHERE id='" . $change . "'");
?>




