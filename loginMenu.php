<!DOCTYPE html>
<html>
<head>
	<title>Woxsen Vahan login menu</title>
   <style type="text/css">	     
   	     .box{
   	     	width: 500px;
		    height: 250px;
		   border: 1px solid black;
		   align-content: center;
		    margin: auto;
		    margin-top: 70px;
   	     }
   	     .box1{
   	     	width:500px;
   	     	height: 122px;
   	     	border: 1px solid #fff;
   	     	background-color: rgba(1,3,0.3,0.5);
   	     	border-radius: 10px;
   	     }
   	     .box2{
   	     	width:500px;
   	     	height: 122px;
   	     	border: 1px solid #fff;
   	     	background-color: rgba(1,3,0.3,0.5);
   	     	border-radius: 10px;
   	     	margin-top: 5px;
   	     }
   	     .box1:hover{
   	     	cursor: pointer;
   	     	background-color: black;
   	     	color: #fff;
   	     }
   	     .box2:hover{
   	     	cursor: pointer;
   	     	background-color: black;
   	     	color: #fff;
   	     }
   	     .loginMenu{
   	     	text-align: center;
   	     	color: #fff;
   	     	font-size: 38px;
   	     }
   	     body{
   	     	background-image: url(image/1.8.jpg);
   	     	background-repeat: no-repeat;
   	     	background-size: cover;
   	     	background-position: center;
   	     	background-attachment: fixed;
   	     }
   	     .menu{
   	     /*	text-transform: uppercase;*/
   	     	color: #fff;
   	     	color: #f44336;
            text-align: center;
            text-decoration: none;
            margin-top: 43px;
   	     }
   	     .menu:hover{
   	     	color: #f44336;
   	     	font-size: 36px;
   	     }
   </style>
   <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
</head>
<body>
<?php include("nav.php");
    ?>
   <div class="box">
      <a href="Login.php">
             <div class="box1">
             	<h1 class="menu">User Login</h1>
             </div>
      </a>
      <a href="adminLogin.php">
             <div class="box2">
             	<h1 class="menu">Admin Login</h1>
             </div>
      </a>
   </div>
</body>
</html>