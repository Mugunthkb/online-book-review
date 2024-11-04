<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image and Content Layout Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <style>
  body{
    background-color:rgba(87, 85, 85, 0.982);
  }
    .container {
      background-color:white;
      border: 10px solid rgb(253, 251, 249);
      padding: 20px;
      margin-top: 20px;
    }
    .highlighted-text {
    color:rgba(51, 47, 47, 0.813); 
  }
  .custom-font {
    font-size: 16px; 
    font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <div class="row">
    <!-- Image column -->
    <div class="col-md-6">
      <img src="../onlinebookdj/images/coverbooks/book4a.png" class="img-fluid" alt="Sample Image" height="300px" width="300px">
    </div>
    <!-- Content column -->
    <div class="col-md-6">
      <div class="content">
        <div class="author-description">
          <h2>Pradeep's A Text Book of Biology for Class 11 (Vol. 1 & 2)</h2>
          <h5>PRICE:500Rs</h5>
          <button class="btn btn-primary "id="navigateButton">BUY NOW</button>
          <br>
          <span class="custom-font"><pre><span class="highlighted-text">Condition</span>          New 
<span class="highlighted-text">Subject/Title</span>      Text Book of Biology for Class 11 (Vol. 1 & 2)
<span class="highlighted-text">Type</span>               School Books (up to 12th)
<span class="highlighted-text">Category</span>           11th
<span class="highlighted-text">Author</span>             N/a
<span class="highlighted-text">Year</span>               N/a
</pre></span>
</div>
      </div>
    </div>
  </div>
</div>
<!---Description--->
<div class="container">
  <div class="row">
        <h4>Description</h4>
      </div>
      <div class="row">
        <p>Pradeep's A Text Book of Biology for Class 11 (Vol. 1 & 2)</p>
      </div>
      <div class="row">
        <p><u>Our Community</u></p>
      </div>
      <div class="row">
        <p>We're not just another shopping website where you buy from professional sellers - we are a vibrant community of students, book lovers across India who deliver happiness to each other!</p>
      </div>
</div>
</div>
<!----FOOTERPART-->
<footer>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase">About US</h5>
        <a href="#">About Us</a>
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
        <p>Book Spot is a free platform where you can buy used books, or new books at very cheap prices. Well at Book Spot, you can also sell used books online in India for actual cash. Buy second hand books like college books, school books, reading books, much more around you.</p>
        <hr class="my-4">
      </div>
    
    </div>
  </div>
</footer>
</body>
<script>
  document.getElementById('navigateButton').addEventListener('click', function() {
    window.location.href = 'samplecheck.html';  // Replace with your desired URL
  });
</script>
</html>
