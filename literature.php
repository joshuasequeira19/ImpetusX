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
		<title>Literature</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<style>
		
			* 
			{
				box-sizing: border-box;
			}
		
			.row:after 
			{
			content: "";
			display: table;
			clear: both;
			}
			
			.column
			{
				float:left;
				padding:10px;
				height:160vh;
			}
			
			.nav
			{
				width:20%;
				height:625px;
				
			}
			
			.post
			{
				width: 80%;
				height:625px;
				
			}
			
			.logo-container
			{	
				height:220px;
				padding:20px;
				background-color:#474e5d;/grey blue
				
				
			
			}
			
			#child
			{
				height:100%;
			}
			
			#gchild
			{
				margin-top:19px;
				width:200px;
				height:140px;
								
			}
			
			img 
			{
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			
			img:hover
			{
				transform:scale(1.3);
			}
			
			.box
			{
				border:5px solid #474e5d;
				height:190px;
				background:white;
			}
			
			.button 
			{
				background-color: #4CAF50; /* Green */
				border: none;
				color: white;
				padding: 20px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}
			
			.buttonback {border-radius: 50%;}
			
			.buttonpost 
			{
				padding: 10px;
				background:transparent;
				color: white;
				text-align:center;
				position: absolute;
				top: 21px;
				right: 220px;
				border:none;
				font-family:times new roman;
				font-size:25px;
				color:grey;
				
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
	color:#B94549;
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

.image{
		margin-top:30px;
		height:120px;
		
		}

		</style>
		<div class="container1 bg1">
			<p class="logo">Impetus-X </p>
			<ul>
			<li><a href="profile.php?logout='1'">Logout</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="#contact">Search</a></li>
			<li><a href="upload.php" >Create a post</a></li>
			<li><a href="admincontrol.php" style="<?php if(isAdmin()){echo 'visibility:visible';}else{echo 'visibility:hidden';}?>">Admin</a></li>
			</ul>
		</div>
	
		<div class="row">
			<div class="column nav" style="background-color:#B94549;" id="parent">
				<!-- div for logo buttons-->
				<div class="logo-container" id="child">
				
				<div class="box">
						<p><a href="technical.php"><!-- add link to respective page-->
						<img src="t2.jpg" class="image"  id="gchild" >
						</a></p>
					</div>
				
					<div class="box">
						<p><a href="literature.php"><!-- add link to respective page-->
						<img src="l1.jpg" class="image" id="gchild" >
						</a></p>
					</div>

					<div class="box">
						<p><a href="art.php"><!-- add link to respective page-->
						<img src="ar2.jpg" class="image"  id="gchild">
						</a></p>
					</div>
				
				</div>
				<!-- div for profile,dashboard link-->
				
				
			</div>
			<div class="column post" style="background-color:#F7C3B1;" >
				
				</li><!--add link to button-->
			</div>
		</div>
	</body>
</html>