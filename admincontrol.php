<?php
	include 'function.php';
	if(!isLoggedin())
	{
		$_SESSION['msg']='Login to access';
		header('location: login.php');
	}
	if(!isAdmin())
	{
		$_SESSION['msg']='Login to access';
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><html>
<head>
<title> Home Page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



</head>
<style>
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
		background-color:#474e5d;
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

#overflowTest {
  background: white;
  color: black;
  position:absolute;
  margin:80px 400px;
  padding: 15px;
  width: 50%;
  height: 300px;
  overflow: scroll;
  border: 1px solid #ccc;
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
				background:trasnparent;		
				
			
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
				border:5px solid none;
				height:760px;
				background:transparent;
			}
					
			.button{
			width: 41%;
			cursor: pointer;
			display: block;
			margin:10px 10px;
			border: 0;
			padding: 15px ;
			outline: none;
			border-radius: 30px;
			background:white;
			color:Black;
			font-size:15px;
			font-family:times new roman;
			}
			
				.button1{
			width: 8%;
			cursor: pointer;
			display: block;
			margin-top:-56px;
			margin-left:137px;
			position:absolute;
			border: 0;
			padding: 14px ;
			outline: none;
			border-radius: 30px;
			background:white;
			color:Black;
			font-size:15px;
			font-family:times new roman;
			}
			
			.btn1{
			width: 8%;
			cursor: pointer;
			display: block;
			margin:395px 610px;
			position:absolute;
			border: 0;
			padding: 15px ;
			outline: none;
			border-radius: 30px;
			background:light grey;
			color:Black;
			font-size:15px;
			font-family:times new roman;
			}
			
			.btn2{
			width: 8%;
			cursor: pointer;
			display: block;
			margin-top:398px;
			margin-left:805px;
			position:absolute;
			border: 0;
			padding: 14px ;
			outline: none;
			border-radius: 30px;
			background:light grey;
			color:Black;
			font-size:15px;
			font-family:times new roman;
			}

</style>

<body>
	<?php 

	if (isset($_GET['info']))
	if (($_GET['info']) === 'del') {
                            echo '<div class="alert-box-container">
											<div class="alert-box rounded p-2" style="box-shadow: 0px 5px 20px 0px #555; background: #218838; color:white;">
												<div class="row">
													<div class="col-4"></div>
													<div class="col-4"><center>User Deleted Successfully!</center></div>
													<div class="col-1 cross" style="padding-left:0"></div>
												</div>
											</div>
											<br>
										</div>';
									}



	?>
<div class="container1 bg1">
	<p class="logo" style="color: black">Impetus-<span style="color: red">X</span></p>
	<ul>
		<li><a href="profile.php?logout='1'">Logout</a></li>
		<li><a href="profile.php">Profile</a></li>
		<li><a href="index.php">Dashboard</a></li>
		<li><a href="#contact">Search</a></li>
		<li><a href="upload.php" >Create a post</a></li>
	</ul>
</div>
<div class="row">
			<div class="column nav"  id="parent">
				
				
				<div class="box">
					
				</div>				
				</div>
	
<div class="container2">
<p class="name">Impetus-<span style="color: black">X</span></p>
</div>
<div class="container3">
<div>
<div id="overflowTest">
	

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>


<?php 

				$user_name = $_SESSION["user"]["user_name"];

				$query = "SELECT * FROM users";
				$results = mysqli_query($db, $query);
				foreach ($results as $rows) {
				?>
            <tr>
                <td><center><?=$rows['id']?></center></td>
                <td><center><?=$rows['user_name']?></center></td>
                <td><center><?=$rows['email']?></center></td>
                <td><center><a href="includes/delete.inc.php?id=<?=$rows['id']?>"><button type="button"> Delete User</button></a></center></td>

            </tr>

				<?php } ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>



</div>
	
</div>
</div>



<div class="clearfix">
	





</div>
</div>
<footer class="container4">
<p class="footer">@impetus-X2020</p>
</footer>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

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
 
</html>