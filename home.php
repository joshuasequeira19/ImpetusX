<?php
	include 'function.php';
	if(!isAdmin())
	{
		$_SESSION['msg']='Login to access';
		header('location: login.php');
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		<?php

		if (($_GET['status']) === 'success') {
                            echo '<div class="alert-box-container">
											<div class="alert-box rounded p-2" style="box-shadow: 0px 5px 20px 0px #555; background: #218838; color:white;">
												<div class="row">
													<div class="col-4"></div>
													<div class="col-4"><center>Progress Saved Successfully!</center></div>
													<div class="col-3"></div>
													<div class="col-1 cross" style="padding-left:0"><i class="fa fa-times" aria-hidden="true" style="cursor:pointer"></i></div>
												</div>
											</div>
											<br>
										</div>';
									}

										?>
		<!--  <div>
			<h2>Home Page</h2>
			

		</div>
		<div><content-->
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
		<div>profile info
			<img src="">
			<div>
				<?php if(isset($_SESSION['user'])):?>
				<strong><?php echo $_SESSION['user']['username'];?></strong>
				<small>
					<i> (<?php echo ucfirst($_SESSION['user']['user_type']);?>)</i>
					<br><a href="bootsrap.html?logout='1'">logout</a>
				</small>
				<?php endif ;?>
			</div>
		</div>

	<script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert-box-container").slideUp(500, function() {
                    $(this).remove();
                });
            }, 5000);
        });

        $(document).ready(function() {
            $(".cross").click(function() {

                $(".alert-box-container").slideUp(500, function() {
                    $(this).remove();
                });
            });
        });

    </script>
	</body>
<html>