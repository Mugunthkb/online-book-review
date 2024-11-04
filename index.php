<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="design.css">
    <!--blogareastyle-->
    <style>
      .clickable-container {
            background-color: lightblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <!---- Navbar------>
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
  <!---cover--->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../onlinebookdj/images/cover/covera.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="../onlinebookdj/images/cover/coverb.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="../onlinebookdj/images/cover/coverc.jpg" class="d-block w-100" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="../onlinebookdj/images/cover/coverd.jpg" class="d-block w-100" alt="Image 3">
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
  
  <!----slider for books---->
 
    <br>
<!---exploree-->
   
  <!--footer part--->
  <footer>
  <div class="container py-5">
    <center><img src="../onlinebookdj/images/cover/coverp.png"></center>
    <br><br>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
       
        </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
       
        <ul class="list-unstyled mb-0">
        
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
     
   </div>
    </div>
  </div>
</footer>
  <script>
    // Auto slide every 3 seconds
    var myCarousel = document.getElementById('carouselExample');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 3000
    });
    //Buy now links 1
    document.getElementById('onebutton').addEventListener('click', function() {
    window.location.href = 'buybookslideone.php';  // Replace with your desired URL
  });
    //Buy now links 1
    document.getElementById('twobutton').addEventListener('click', function() {
    window.location.href = 'buybookslidetwo.php';  // Replace with your desired URL
  });
     //Buy now links 3
    document.getElementById('threebutton').addEventListener('click', function() {
    window.location.href = 'buybookslidethree.php';  // Replace with your desired URL
  });
    //Buy now links 4
    document.getElementById('fourbutton').addEventListener('click', function() {
    window.location.href = 'buybookslidefour.php';  // Replace with your desired URL
  });
    //Explore books
    document.getElementById('explore').addEventListener('click', function() {
    window.location.href = 'buybookslidefour.php';  // Replace with your desired URL
  });
    //Blogarea
     function redirectToPage(url) {
        window.location.href = url;
    }

  </script>
</body>
</html>