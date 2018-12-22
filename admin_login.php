<?php
  session_start();
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #2A8C2D;

	color: #fff;
	font-family: Arial;
	font-size: 8px;
}

.pic img{
	width:30%;
	height:auto;
	margin-top: 50px;
	margin-left:50px;

}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: 100%;
	height: 100%;
	background-size: cover;
	
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: calc(102% - 7px);
	height: 103%;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
    margin-left: 100px;
	margin-top:12px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(39% - 20px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
    margin-left:50px;
	margin-top:13px;
	z-index: 2;
}

.login #lb{
	font-size:20px;	
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 
</head>

<body class="pic">
<img src = "assets/image.svg.png" alt="image">
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Login<span></span></div>
		</div>
		<br>
		
<form action="admin_login.php" method="post">
		<div class="login">
		         <br><br><br><br>
				 <input type="text" placeholder="Enter Username" name="Username" required><br>
				 <input type="password" placeholder="Enter Password" name="Password" required><br>
				 <br>
				<button name="login" type="submit">Login</button>
				
		</div>
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</body>
</html>
<?php 
include('connection.php');
if(isset($_POST['login']))
{
	$uname=$_POST['Username'];
	$pass=$_POST['Password'];
	$query = "SELECT * FROM admin WHERE  Username = '$uname' AND Password = '$pass' ";
    $data = mysqli_query($con, $query);
    if(mysqli_fetch_assoc($data))
    {
		$_SESSION['Username']=$uname;
        header('location:index.php');
    }
	else
	{
		echo "<script>alert('Wrong username or password')</script>";
	}
}
?>


