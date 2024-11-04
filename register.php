<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{



   $tes=mysqli_query($conn,"select * from sregister where username='$username'");
   
   $num=mysqli_num_rows($tes);
   
   if($num==0){




	$max_qry = mysqli_query($conn,"select max(id) from sregister");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		
$qry=mysqli_query($conn,"insert into sregister values($id,'$name','$gender','$dob','$email','$phone','$address','$username','$password')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
}

}else{

echo "<script>alert('Username Already in use')</script>";
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
        
         margin: 20px auto;
         width: 100%;
         max-width: 700px;
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

    <div class="containera">
   



 <form id="f1" name="f1" method="post" action="#" >
  <table width="36%" height="541" border="0" align="center">	
	

    <tr>
    
     <td height="40" colspan="2"  align="center" ><div class="style5"><h3>New User Registration</h></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="46"><span class="style6">User Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
    <tr>
     
      <td height="40"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
    <tr>
     
      <td height="39"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="44">Email Id</td>
      <td><input name="email" type="text" id="email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" title="enter a valid email id"/></td>
     
    </tr>
	
	
	  <tr>
      
      <td height="42">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required  pattern="[6789][0-9]{9}"  title="firstnumber should be start with 6 or 7 or 8 or 9 range 10"/></td>
     
    </tr>
	
	  <tr>
      
      <td height="41">User Name </td>
      <td><input name="username" type="text" id="username" required pattern="[A-z 0-9]{3,8}" title="Minimun 3 character max 9"/></td>
     
    </tr>
	
	<tr>
     
      <td height="43">Password</td>
      <td><input type="password" name="password" id="password" required pattern="[A-z 0-9@*]{3,8}" title="Minimun 3 character max 9"></td>
     
    </tr>
	

		 <tr>
    
      <td height="55">User Address</td>
      <td><textarea name="address"></textarea></td>
     
    </tr>



	<tr>
     
     <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
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
