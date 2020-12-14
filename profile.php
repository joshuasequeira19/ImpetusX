<?php
	include 'function.php';
	if(!isLoggedin())
	{
		$_SESSION['msg']='Login to access';
		header('location: login.php');
	}

	//$user_name = $_SESSION["user"]["user_name"];
	// $email       =  e($_POST['email']);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body{		
		
		background-image:url("background.png");		
		background-position: center;
		background-size: cover;
		position: relative;
		margin: auto;
}
.form-box{		
	width: 380px;
	height: 500px;
	position: relative;
	background: white;
	padding: 6px;
	overflow:visible;
	margin: 58px 200px;
	float:left;
}

.form-box1{
	
	width: 380px;
	height: 500px;
	position: flex;
	background: white;
	padding: 5px;
	margin: 58px 580px;
	background-color:#B94549;
	position:absolute;
	}

.input-group{
	top: 160px;
	position: absolute;
	width: 280px;
	transition: .5s;
	
}

.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 30px;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
	color:black;
}
.profile_image{
		height:80px;
		width:50px;
		margin-left:150px;
		margin-top:-100px;
		margin-bottom:80px;
	}
.view{	
		text-align:right;
		color:grey;
		text-decoration:none;
		
	}

.button{
	width: 45%;
	padding: 8px 30px;
	cursor: pointer;
	display: block;
	margin: 10px 30px;
	border: 0;
	outline: none;
	border-radius: 5px;
	background:light grey;
	}	
	
	.ebutton{
	width: 50%;
	padding: 8px 30px;
	cursor: pointer;
	display: block;
	margin: -40px 180px;
	border: 0;
	outline: none;
	border-radius: 5px;
	background:light grey;
	text-align:center;
	}	
	
	.iedit{	
		width:20px;
		height:20px;
		position:relative;
		margin-top:-3px;
	}
	
	.btn1{
		width:45%;
		margin-left:30px;
		mrgin-bottom:80px;
		font-size:15px;
		
		}
	.btn2{
		width:45%;
		margin-left:35px;
		mrgin-bottom:100px;
		font-size:15px;
		position:absolute;
		padding:10px;
		
		}
	.profile{
		font-family:times new roman;
		font-size:30px;
		position:absolute;
		margin-left:140px;	
		
	}
	.i1{
	margin:-390px 8px;
	position:absolute;
	}
	
	.i2{
	margin:120px 3px;
	position:flex;
	
	
	}
	
	.container1{
		height:80px;
		}
	.bg1{
		background-color:#f5f6f7;
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
  margin:-15px auto;
 
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
</style>
</head>
<body>
<div class="container1 bg1">
	<p class="logo" style="color: black">Impetus-<span style="color: red">X</span></p>
	<ul>	
  <li><a href="profile.php?logout='1'">Logout</a></li>
  <li><a href="upload.php">Upload</a></li>
  <li><a href="index.php">Dashboard</a></li>
  <li><a href="#contact">Search</a></li>
  <li><a href="admincontrol.php" style="<?php if(isAdmin()){echo 'visibility:visible';}else{echo 'visibility:hidden';}?>">Admin</a></li>
</ul>
</div>
	
<div class="form-box1">
		<img class="i2" src="MAPR.png" width=100% align="center">
		<img class="i1" src="image111.png" width=100% align="center">
						
		</div>
<div class="form-box">
	<form  id="Member" class="input-group">
		<p class="profile">Profile</p>
		<img  class="profile_image" src="pr2.png" ></img>
		<input type="text" class="input-field" id="uname" placeholder="user_name" name="user_name">
		<input type="text" class="input-field" id="uname" placeholder="Email" name="email" >
		<input type="text" class="input-field" id="about" placeholder="About" name="about" >
		<br> <br>
		<a href="technical_user.php" class="btn btn1 btn-default btn-lg">
		<span class="glyphicon glyphicon-search"></span> View post</a>
		
		<a href="#" class="btn btn2 btn-default btn-lg">
		<span class="iedit"><img class="iedit" src="pencil.png"</span> Edit Info</a>
	</form>
</div>

		
</body>
</html>
