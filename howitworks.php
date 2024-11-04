<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Bootstrap 5 Container Example</title>
  <style>
  .covera{
            background-color:lightblue;
            font-family:Cursive;
            color: black;
        }
   .custom-container {
      background-image: url('../onlinebookdj/images/cover/bga.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      padding: 20px; /* Adjust padding as needed */
    }
	.work-container {
      background-image: url('../onlinebookdj/images/cover/bgb.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      padding: 20px; /* Adjust padding as needed */
    }
  </style>
</head>
<body>
<div class="container-fluid covera mt-3">
        <div class="row">
        <center><h1>Bookspot</h1></center>
    </div>
</div>
<!-- first container-->
<div class="custom-container mt-5">
  <div class="row">
    <div class="col-md-6">
	<center>
	    <h1 class="mt-5"><b>How to Sell Old Books in Online?</b></h1>
		<h5 class="mt-4">No matter you are a student, a reader; sell your old books online throughout India on Bookspot and earn some extra money in your account.</h5>
		</center>
    </div>
    <div class="col-md-6">
	    <img src="../onlinebookdj/images/cover/coverq.png" class="img-fluid" alt="Your Image">
    </div>
  </div>
</div>
<!--second container-->
<!---steps images--->
<div class="work-container mt-5">
<h2><center><u>How to <span style="color:plum;">SELL</span> your old books online on Clankart?</u></center></h2>
   <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Step 1</h5>
                    <img src="../onlinebookdj/images/cover/coverg.jpg" class="rounded-circle" alt="Cinque Terre" width="100" height="103"> 
                    <p class="card-text">Post a Book for selling used books</p>
                        <p>---------------------------------------</p>
                    <p class="card-text">Post an Book on Bookspot describing your book details to sell your old books online.</p>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Step 2</h5>
                    <img src="../onlinebookdj/images/cover/coverh.jpg" class="rounded-circle" alt="Cinque Terre" width="100" height="103"> 
                    <p class="card-text">Set the selling price for your books</p>
                    <p>---------------------------------------</p>
                    <p class="card-text">Set the price for your books at which you want to sell them.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Step 3</h5>
                    <img src="../onlinebookdj/images/cover/coveri.jpg" class="rounded-circle" alt="Cinque Terre" width="100" height="103"> 
                    <p class="card-text">Get your through cash on delivery.</p>
                    <p>---------------------------------------</p>
                    <p class="card-text">You will get money into your account once you receive an order for your book.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>
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
        <a href="contact.php">Contact Us</a>
        <br>
        <a href="bloggingone.php">Blog</a>
        </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase">Use Full Links</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="#">How it works?</a></li>
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
      <div>
       <a href="login.php" class="btn btn-primary">Admin</a>
       <a href="register.php" class="btn btn-primary">Register</a>
   </div>
    </div>
  </div>
</footer>
<!-- Bootstrap JS and Popper.js scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
