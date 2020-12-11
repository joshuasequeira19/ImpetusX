<?php include 'function.php'?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>Login</title>
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
	overflow:hidden;
	margin: 6% 10%;
	
}



.form-box1{
	
	width: 380px;
	height: 503px;
	position: relative;
	background: white;
	padding: 5px;
	margin: -39.4% 35%;
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
	top: 200px;
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
	margin: 50px 100px 10px;
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
	background:#B94549;
	
	
}
.h1{
	font-family:times new roman;
	font-size:30px;
	font-weight:bold;
	color:#B94549;
	margin-top:50px;
	margin-left:10px;
}
.f1{
	font-family:times new roman;
	font-size:15px;
	margin-top:20px;
	margin-left:140px;
	position:absolute;
	}
.f2{
	font-family:times new roman;
	font-size:15px;
	margin-top:-2px;
	margin-left:120px;
	position:absolute;
	}
	
	.i1{
	margin:30px -370px;
	position:relative;
	}
	
	.i2{
	margin:120px 5px;
	position:flex;
	
	
	}
	


</Style>
	

	<body>
		
		<div class="form-box">
				<p class="h1">Login<p>

		<form method='POST' action='login.php' class="input-group" id='login'>
			<?php echo display_error(); ?>
			
			
				<input type="text" name="username" class="input-field" placeholder="User Name" value="<?php echo $username;?>">
				<input type="password" name="password_1" class="input-field" placeholder="Password">
			
			<button  class="submit-btn" type="submit" form="login" name="login_btn">Login</button>		
			<a class="f1" href="register.php">Sign-up</a>
			<p class="f2"> Not a member</p>
		</div>
		</form>
		<aside class="items" id="login">
	<div class="main1">
		<div class="form-box1">
					<img class="i2" src="MAPR.png" width=100% align="center">
					<img class="i1" src="image111.png" width=100% align="center">



			
		</div>
	</div>
	</aside>
	</body>
	
</html>
