<?php
	include 'function.php';
	if(!isAdmin())
	{
		$_SESSION['msg']='Login to access';
		header('location:login.php');
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title content="width=device-width, initial-scale=1">Home</title>
	</head>
	<body>
		<div>
			<h2>Home Page</h2>
			
		</div>
		<div><!--content-->
			<?php if(isset($_SESSION['success'])): ?>
			<div><!--error class-->
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
			<?php endif;?>
		</div>
		<!-- logged in user info-->
		<div><!--profile info-->
			<img src="">
			<div>
				<?php if(isset($_SESSION['user'])):?>
				<strong><?php echo $_SESSION['user']['user_name'];?></strong>
				<small>
					<i> (<?php echo ucfirst($_SESSION['user']['user_type']);?>)</i>
					<br><a href="index.php?logout='1'">logout</a>
				</small>
				<?php endif ;?>
			</div>
		</div>
	</body>
<html>