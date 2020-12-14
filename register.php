<?php include'function.php';?>
<!DOCTYPE HTML>
<html>
	
	<head>
		<title content="width=device-width, initial-scale=1">Registration form</title>
	</head>
	<style>
	*{
	margin:0;
	padding:0;
 }
 
 ::placeholder{
		color: Black;
		opacity: 1;
	}
 
 .main{
	 
	 height:100%;
	 width:100%;
	 background-position:center;
	 background-size:cover;
	 position: absolute;
 }
 
 marquee{
	width:50%;
	color:pink;
	margin: 5px 50px ;
	text-align: right;
	font-family:serif;
	
	}
 
  
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
	margin: 100px 200px;
	
}



.form-box1{
	
	width: 380px;
	height: 502px;
	position: flex;
	background: white;
	padding: 5px;
	margin: -146px 385px;
	background-color:#B94549;
}

.submit-btn:hover{
		transform: scale(1:3);
		box-shadow:2px 2px 2px #000;
}	

.check-box:hover{
		transform: scale(1:3);
		background:#ff105f;
		box-shadow:2px 2px 2px #000;
}	
.button-box{
	width: 200px;
	margin: 35px auto;
	position: relative;
	//box-shadow: 0 0 20px 9px ;
	border-radius: 30px;
	outline:none
	color: white;
}


.check-box{
	margin: 10px 20px 30px;	
}


span{
	
	font-size: 15px;
	bottom: 64px;
	position: absolute;
	color: black;
}

#Member{
	left: 50px;
	
	
}

.toggle-btn{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
	color:white;
	font-weight:bold;
	font-size:15px;
	font-family:times new roman;
}

#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	border:0;
	background: #B94549;
	border-radius: 30px;
	transition: .5s;
}

.input-group{
	top: 140px;
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

.submit-btn{
	width: 45%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: 20px 110px 10px;
	background: #B94549;
	border: 0;
	color:White;
	outline: none;
	border-radius: 30px;
	font-weight:bold;
	font-size:15px;
	font-family:times new roman;
	
}

.button{
	width: 45%;
	padding: 5px 30px;
	cursor: pointer;
	display: block;
	margin: 30 60;
	border: 0;
	outline: none;
	border-radius: 30px;
	background:none;
	
}
.t1{
	font-family:Times New Roman;
	font-weight:bold;
	font-size:25px;
	color:black;
	margin:200px 130px;
	
	
	}
	
.i1{
	margin:-390px 8px;
	position:absolute;
	}
	
.i2{
	margin:120px 3px;
	position:flex;
	
	
	}
	
	.Sign{
	font-family:times new roman;
	font-size:35px;
	font-weight:bold;
	margin:50px 50px;
	color:#B94549;
	text-align:left;
	}
	
	.f1{
	margin-bottom:-80px;
	margin-left:120px;	
	postition: absolute;
	}
	
	.f2{
	margin:10px 150px;	
	}

	</style>

	<body>
	<aside class="items" id="login">
	<div class="main">
	<div class="form-box">
	<p class="Sign"> Sign-Up</p>
	<form method="post" action="register.php" class="input-group" id="register">
		
		<p><?php echo display_error(); ?><p>
		
		<div>
			
			<input type="text" class="input-field" name="username" placeholder="User Name" value="<?php echo $username;?>">
		
			<input type="email" class="input-field" name="email"  placeholder="E-Mail" value="<?php echo $email;?>">
			<input type="password" class="input-field"  placeholder="Password" id="password_1" name="password_1">
		
			<input type="passsword" class="input-field"  placeholder=" Confirm Password" id="password_2" name="password_2">
	
			<button type="submit" form="register"  class="submit-btn" name='register_btn'>Register</button>
			<span class="f1">Already a member?</span>
	</form>
			<a class="f2" href="login.php">Login</a>

		</div>
		<aside class="items" id="login">
		<div class="form-box1">
		<img class="i2" src="MAPR.png" width=100% align="center">
		<img class="i1" src="image111.png" width=100% align="center">
						
		</div>
	</div>
	</aside>

	</div>
	</body>
	
<html>