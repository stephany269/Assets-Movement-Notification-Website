<!DOCTYPE html>
<html>
<link rel="stylesheet" href="form.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	
</head>
<body>	
		<div class="center">
			<div class="container">
				<div class="text">LOGIN</div>
				<form action="login.php" method="post">
					<div class="data">
						<label>Username</label>
						<input type="text" name="uname" required>
					</div>
					<div class="data">
						<label>Password</label>
						<input type="password" name="password" required>
					</div>
					<div class="btn">
						<div class="inner"></div>
						<input type="submit" value="LOGIN" name="proses" class="tombol_login">
					</div>
					
<?php if (isset($_GET['error'])) { ?>
     		<center><p class="error"><?php echo $_GET['error']; ?></p></center>
		<?php } ?>
				</form>
			</div>
		</div>

</body>
</html>