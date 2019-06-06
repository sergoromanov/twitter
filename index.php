<!DOCTYPE html>
<html>
<head>
	<title>Twitter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="bg-light ">
	<div class="container-fluid bg-white">
		<div class="container">
			<div class="row">
				<div class="col-4 d-flex">
					<div>
						<img src="images/icons8-home-50.png">
						<a href="#">Домой</a>
					</div>
					<div>
						<img src="images/icons8-notification-50.png">
						<a href="#">Уведомления</a>
					</div>
					<div>
						<img src="images/icons8-new-post-50.png">
						<a href="#">Сообщения</a>
					</div>
				</div>
				<div class="col-4"></div>
				<div class="col-4"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!--левая колонка-->
			<div class="col-3">
				<div class="bg-white mt-2 rounded">
					<div>
						<img src="images/background.jpg" class="w-100">
					</div>

					<div class="row">
						<div class="col-4">
							<img src="images/avatar.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<div>
								<a href="#">test</a>
							</div>
							<div>
								<a href="#">@test1283498</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<div>
								<h6><a href="">Твиты</a></h6>
								<h6><a href="">228</a></h6>
							</div>
						</div>
						<div class="col-6">
							<div>
								<h6><a href="">Читаемые</a></h6>
								<h6><a href="">337</a></h6>
							</div>
						</div>
					</div>

				</div>
				<!--topics-->
				<div class="bg-white rounded ">
				<?php $connect = mysqli_connect('127.0.0.1', 'root','','anastasia_ch_16');
				    $que = mysqli_query($connect, 'SELECT * FROM leftcol');
				    $topics = $que->fetch_assoc();
					?>

					<h3 class="mb-2 mt-2">Твиты</h3>

					<?php for($i = 0; $i < $que->num_rows; $i++) { ?>
						<p class="mb-0"><a href="#" class="text-primary"><?php  echo $topics['name']?></a></p>
						<p><a href="#" class="text-secondary"><?php echo $topics['tweets'] ?></a></p>
					<?php } ?>
				</div>
			</div>
			<!---middle колонка--->
			<div class="col-6">
				<div class="row">
					<div class="col-2">
						<img src="images/avatar.jpg" class="rounded-circle">
					</div>
					<div class="col-10">
						<form method="POST" action="abc.php">						
							<input type="" name="text">
						<button>Твитнуть</button>
						</form>

					</div>
				</div>
				<div class="row">
					<!--post1 begins-->
			        <?php $connect = mysqli_connect('127.0.0.1', 'root','','sergey_tue_17');
			        $query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC');
					?>

					<?php for($i = 0; $i < $query->num_rows; $i++) { ?>

			            <div class="col-2">
			              <a href="#" class="rounded-circle"><?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['logo'] . '">'; ?></a>
			            </div>
			            <div class="col-10">
			              	<div class="row">
			                	<h5>
			                 	 	<a href="#" class="text-dark"><?php echo $logo['title'] ?></a>
			                	</h5>
			              	</div>
			              	<div>
			                	<p><?php echo $logo['text'] ?></p>
			              	</div>
			              	<div>
				                <?php echo '<img src="' . $logo['img'] . '" class="w-100 rounded">'; ?>
				                <img src="" class="w-100 rounded"></a>
				                <form action="delete.php" method="POST">
				                	<button name="in" value="<?php echo $logo['id'] ?>">Удалить</button>
				                	</form>
				                	<form action="bca.php" method="POST">
				                		<button name="change" value="<?php echo $logo['id'] ?>">Редактировать</button>
				                	</form>
			              	</div>
			              	<div class="row">
				                <div class="col-3">
				                  <img src="images/like.png">
				                </div>
				                <div class="col-3">
				                  <img src="images/comment.png">
				                </div>
				                <div class="col-3">
				                   <img src="images/envelope.png">
				                </div>
				                <div class="col-3">
				                   <img src="images/retweet.png">
				                </div>
			              	</div>
			            </div>
			           <?php } ?>
					<!--post 1 ends-->
				</div>
			</div>
			<!---right колонка--->
			<div class="col-3">
				<div class="bg-white rounded">
					<div class="row ml-2">
						<h5>lorem</h5>
						<P>
							.<a href="#">LOREM</a>.<a href="#">one</a>
						</P>
					</div>
					<div class="row">
						<div class="col-4">
							<img src="images/2.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<h4>lorem are</h4>
							<p class="text-secondary">@LOrema</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-4">
							<img src="images/1.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<h4>LOrem</h4>
							<p class="text-secondary">@LOREM</p>
						</div>
					</div>
				</div>
				<div class="col-12 bg-white mt-1 rounded">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</div>
			</div>
		</div>
	</div>

</body>
</html>