<?php
	include 'function.php';
	if(!isLoggedin())
	{
		$_SESSION['msg']='Login to access';
		header('location: login.php');
	}
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title content="width=device-width, initial-scale=1">Home</title>
	</head>
	<body>
		<html>
<head>
<title> Home Page</title>
</head>
<style>
	user{
		visibility:hidden;
	}
	admin{
		visibility:visible;
	}
	img 
			{
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			
			
	.container1{
		height:80px;

		}
	.bg1{
		background-color:#f5f6f7;
	}
	.container2{
		background-color:#B94549;
		height:300px;
		margin-top:20px;
	}
	.container3{
		background-color:#474e5d;;
		margin-top:20px;
		height:460px;
	}
	.container4{
		background-color: #2f2f2f;
		margin-top:20px;
		height:120px;
	}
	 
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: visible;
}

li {
  float: right;
  margin-top:20px;
}

li a {
  display: block;
  padding: 18px;
  color:grey;
  font-family: Times new roman;
  font-size:25px;
  margin-right:5px;
  text-decoration:none;
  position:relative;
  margin:-50px auto;
 
}

li a:hover{
	transform: scale(1:3);
	color:black !important;
	}
.logo{
	margin-left:90px;
	position:absolute;
	overflow:visible;
	margin-top:30px;
	font-family: Times new roman;
	color:grey;
	font-size:25px;
}

.hi{
	color:white;
	font-family:times new roman;
	font-size:30px;
	margin:auto 665px;
	position:absolute;	
	margin-top:40px;
}	

div.gallery {
  border: 1px solid black;
  margin-top:90px;
  margin-left:220px;
  background-color:white;
  width:90%;
  height:70%;
 
}

div.gallery:hover {
  border: 5px solid grey;
}

div.gallery img {
 
  
  margin-top:30px;
  margin-left:30px;
}

div.desc {
  padding: 10px;
  text-align: center;
  font-family:times new roman;
  font-size:20px;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.name{	
	margin-top:120px;
	margin-left:630px;
	color:#F7C3B1;
	font-family:Times new roman;
	font-size:55px;
	position:absolute;
}

.footer{
	font-family:Times new roman;
	font-size:20px;
	color:White;
	position:absolute;
	margin-top:50px;
}
.acc{
		margin-top:10px;
}



</style>
<body>


		
<div class="container1 bg1">
<img class="acc" src="ac1.png" align="left" width="50" height="50">
		<div><!--content-->
			<?php if(isset($_SESSION['success'])): ?>
			<div class="p1"><!--error class-->
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
		<!--profile info-->
			<img src="">
			<div>
				
			</div>
	<?php if(isset($_SESSION['user'])):?>
				<strong><?php echo $_SESSION['user']['user_name'];?></strong>
	<?php endif ;?>
					<i> (<?php echo ucfirst($_SESSION['user']['user_type']);?>)</i>
	<ul>	
  <li>			<?php if(isset($_SESSION['user'])):?>
					<a href="index.php?logout='1'">Logout</a>
				</small>
				<?php endif ;?>
  <li><a href="upload.php">Upload</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="admincontrol.php" style="<?php if(isAdmin()){echo 'visibility:visible';}else{echo 'visibility:hidden';}?>">Admin</a></li>
</ul>
</div>
	
<div class="container2">
<p class="name">Impetus-X</p>
</div>
<div class="container3">
<p class="hi">Categories</p>
<div class="responsive">
  <div class="gallery">
    <p><a  href="literature.php">
      <img src="l1.jpg" alt="books" width="260" height="250">
    </a></p>
    <div class="desc">Literature</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <p><a  href="art.php">
      <img src="ar2.jpg" alt="Forest" width="260" height="250">
    </a></p>
    <div class="desc">Art</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <p><a  href="technical.php">
      <img src="t2.jpg" alt="Northern Lights" width="260" height="250">
    </a></p>
    <div class="desc">Technicals</div>
  </div>
</div>



<div class="clearfix"></div>
</div>
<footer class="container4">
<p class="footer">@impetus-X2020</p>
 		
		
			
	</body>
</html>