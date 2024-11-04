<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from admin where name='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
echo "<script>alert('welcome to admin login')</script>";
header("location:admin.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .coverb{
            background-color:lightgoldenrodyellow;
        }
        .covera{
            background-color:maroon;
            font-family:Cursive;
            color: wheat;
        }
        .geek1{
            font-size:66px;
            font-family:fantasy;
            color:maroon;
            text-align:center;
        }
        .containera {
         background-color:white;
         border: 1px solid #ccc;
         border-radius: 5px;
         padding: 20px;
         margin: 20px auto;
         width: 80%;
         max-width: 600px;
         text-align: center;
     }
     h2 {
        font-size: 44px;
        color:black;
    }
   
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <nav class="navbar navbar-light bg-light">
        <div class="container">
            <img src="../onlinebookdj/images/logodj.png" alt="" width="90" height="84">
          </a>
        </div>
      </nav>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
			  
			   <li class="nav-item">
          <a class="nav-link" href="login.php">Admin Login</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="stud.php">User Login</a>
              </li>
		
              </ul>
           
          </div>
       </nav>


    <div class="container covera">
        <div class="row">
        <center><h1>Bookspot</h1></center>
    </div>
</div>
<!---login ---->
<div class="container coverb">
<h2><center>Login</center></h2>
    <div class="containera">
 

<form id="form1" name="form1" method="post" action="">
	   <table width="48%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Admin Login</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
  </table>
</form>
    </div>
</div>
  <!--footer part--->
  <footer>
  <div class="container py-5">
    <center><img src="../onlinebookdj/images/cover/coverp.png"></center>
    <br><br>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase">About US</h5>
        <a href="about.php">About Us</a>
        <br>
        <a href="#">Contact Us</a>
        <br>
        <a href="#">Blog</a>
        </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase">Use Full Links</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="#">How it works?</a></li>
          <li><a href="#">Clankart Teleport</a></li>
          <li><a href="#">Frequently Asked Questions (FAQs)</a></li>
          <li><a href="#">Terms Of Use / Listing Policy / Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Icons</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="container">
        <hr class="my-4">
        <p><h6>Book Spot is a free platform where you can buy used books, or new books at very cheap prices. Well at Book Spot, you can also sell used books online in India for actual cash. Buy second hand books like college books, school books, reading books, much more around you.</h6></p>
        <hr class="my-4">
      </div>
    
    </div>
  </div>
</footer>

</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</html>
