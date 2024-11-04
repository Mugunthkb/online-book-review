<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
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
        color:maroon;
    }
    input[type=text]{
        width: 40%;
        padding: 12px;
        display: inline-block;
        border:solid;
        background: #f1f1f1;
    }
    input[type=email]{
        width: 40%;
        padding: 12px;
        display: inline-block;
        border: solid;
        background: #f1f1f1;
    }
    textarea{
        width: 85%;
        padding: 12px;
        display: inline-block;
        border:solid;
        background: #f1f1f1;
         }
         input[type=submit]{
            background-color:blue;
            color: white;
            padding: 10px 10px;
            margin: 9px 0;
            border: solid;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="container covera">
        <div class="row">
        <center><h1>Bookspot</h1></center>
    </div>
</div>
    <!---bloging part---->
<div class="container coverb">
            <p class="text-muted"><h1><center>Feel free to write us!</center></h1></p>
            <h4><p class="text-muted"><center>Our support team is waiting to hear from you. Any query, feel free to write us. Email us at support@bookspot.com 
            Contact Us</center></p></h4>
            <br><br>
            <div class="containera">
            <form method="post" action="process_feedback.php">
            <h2>Contact Us</h2>
            <input type="text" name="name" placeholder="Name">        
            <input type="email" name="email" placeholder="email-id"><br><br>
            <textarea name="subject" rows="2" placeholder="Subject"></textarea><br><br>
            <textarea name="feedback" rows="4" placeholder="How we can help?"></textarea><br><br>
            <input type="submit" value="Submit">
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
        
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
