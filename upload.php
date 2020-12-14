<?php
	include 'function.php';
	if(!isLoggedin())
	{
		$_SESSION['msg']='Login to access';
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
	margin: -558px 640px;
	float:left;
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

.textbox{
	height:400px;
	width:365px;
	}
	
.submit-btn{
	width: 30%;
	padding: 10px 25px;
	cursor: pointer;
	display: block;
	margin: 10px 128px 10px;
	background: #B94549;
	border: 0;
	color:White;
	outline: none;
	border-radius: 30px;
	font-weight:bold;
	font-size:15px;
	font-family:times new roman;
	
}

.button1{
	width: 25%;
	padding: 5px 30px;
	cursor: pointer;
	display: block;
	margin: -48 270;
	border: 0;
	padding: 9px 30px;
	outline: none;
	border-radius: 30px;
	background:#B94549;
	color:White;
	font-size:15px;
	font-family:times new roman;
	
}
.button{
	width: 25%;
	padding: 5px 30px;
	cursor: pointer;
	display: block;
	margin: 12 5;
	border: 0;
	padding: 10px 30px;
	outline: none;
	border-radius: 30px;
	background:#B94549;
	color:White;
	font-size:15px;
	font-family:times new roman;
	
	
}
.label1{
	font-family:times new roman;
	font-size:35px;
	font-weight:bold;
	margin:50px 90px;
	color:#B94549;
	text-align:left;
	}
	
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
			
	
</style>
<body>

<div class="container1 bg1">
	<p class="logo">Impetus-X </p>
	<ul>	
  <li><a href="profile.php?logout='1'">Logout</a></li>
  <li><a href="#news">Search</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="admincontrol.php" style="<?php if(isAdmin()){echo 'visibility:visible';}else{echo 'visibility:hidden';}?>">Admin</a></li>
</ul>
</div>
<div class="row">
			<div class="column nav" style="background-color:#B94549;" id="parent">
				<!-- div for logo buttons-->
				<div class="logo-container" id="child">
				
				<div class="box">
						<p><a href="technical.php">
						<img src="t2.jpg" class="image"  id="gchild" >
						</a></p>
					</div>
				
					<div class="box">
						<p><!--a href=""-- add link to respective page-->
						<img src="l1.jpg" class="image" id="gchild" >
						</a></p>
					</div>

					<div class="box">
						<p><!--a href=""><!-- add link to respective page-->
						<img src="ar2.jpg" class="image"  id="gchild">
						</a></p>
					</div>
				
				</div>
<div class="form-box">
	<form action="includes/upload.inc.php" method="post">
      <label class="label1" for="text">Start typing</label>
      <br>
      <input type="text" name="title">
      <br>
      <textarea  class="textbox" id="text" name="post" rows="12" cols="50"></textarea>
      <input type="hidden" value="">
      <br/>
      <label for="type">Choose the section you want the post to be uploaded to:</label>

<select name="type" id="type">
  <option value="Literature">Literature</option>
  <option value="Technical">Technical</option>
  <option value="Art">Art</option>
</select>
<br>

      <input class="submit-btn" type="submit" value="Submit">
	  <input class="button1" type="submit" value="Delete">
      <input class="button" type="submit" value="View">

    </form>
</div>
  </body>
</html>