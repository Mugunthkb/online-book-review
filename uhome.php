<?php
    include "db_conn.php";
	
	
	
	
		extract($_POST);
	session_start();
//echo	$reg=$_SESSION['reg'];
 $name= $_SESSION['uname'];
	error_reporting(0);

    include "login/func_book.php";
    $books = get_all_books($conn);

    include "login/func_author.php";
    $authors = get_all_author($conn);

    include "login/func_category.php";
    $categories = get_all_categories($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
    <!--blogareastyle-->
    <style>
      .book-list {
        width: 80%;
    }
    .card {
        width: 18rem;
    }
    .category .list-group {
      width: 200px;
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
                <a class="nav-link active" aria-current="page" href="uhome.php">Home</a>
              </li>
              <li class="nav-item">
              </li>
			   <li class="nav-item">
              </li>
			  
              <li class="nav-item">
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
              </li>
              </ul>
              <form action="search.php"
             method="get" style="width: 100%; max-width: 30rem">

        <div class="input-group my-5">
        

           
            
          </div>
       </nav>
       <div class="container">
     
       <div class="d-flex">
        <div class="d-flex pt-3">
          <?php if ($books == 0) { ?>
            <div class="alert alert-waring text-center p-5 book-list" role="alert">The key <b>"<?=$key?>"</b>didn't match to any record in the database</div>
          <?php }else{ ?>
    <div class="book-list d-flex flex-wrap">
      <?php foreach ($books as $book) { ?>

        <div class="card m-1">
            <img style="width:400px;height:400px" src="uploads/cover/<?=$book['cover']?>" class="card-img-top img-fluid">
            <div class="card-body">
                <h5 class="card-title">
                  <?=$book['title']?>
                </h5>
                <p class="card-text">
                  <i><b>By:
                        <?php foreach($authors as $author) { 
                               if ($author['id'] == $book['author_id']) {
                                       echo $author['name'];
                                       break;
                               }
                               ?>

                        <?php } ?>
                  <br></b></i>
                  <?=$book['description']?>
                  <h6><b>PRICE:<?=$book['price']?></b></h6>
                  <br><i><b>Category:
                        <?php foreach($categories as $category) { 
                               if ($category['id'] == $book['category_id']) {
                                       echo $category['name'];
                                       break;
                               }
                               ?>

                        <?php } ?>
                  <br></b></i>
                </p>
				<div style="display:flex;flex-wrap:wrap;gap:10px;">
				
               <a target="_blank"  style="background:#0d6efd;color:#FFFFFF;border-radius:7.5px;padding:10px 5px;text-decoration:none;margin-right:3px" href="<?php echo $book['ylink'];?>" >YTube Link</a>
			   
			   
			   <a target="_blank" style="background:#0d6efd;color:#FFFFFF;border-radius:7.5px;padding:10px 5px;text-decoration:none;margin-right:30px" href="<?php echo $book['blink'];?>" >Buy Link</a>
			   
			   
			   
			   

                <a target="_blank" href="uploads/files/<?=$book['file']?>"
                  class="btn btn-primary"
                  Preview="<$book['file']?>">PREVIEW</a>
				  
				   </div>

              </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>

    <div class="category">
      <!--list the categories--->
      <div class="list-group">
        <?php if ($categories == 0){
          //donothing
        }else{ ?>
        <a href="#" class="list-group-item list-group-item-action active">Category</a>
        <?php foreach ($categories as $category) { ?>

      
        <a href="category.php?id=<?=$category['id']?>" class="list-group-item list-group-item-action"><?=$category['name']?></a>
          <?php } } ?>
      </div>
      <!--list the authors--->
      <div class="list-group mt-5">
        <?php if ($authors == 0){
          //donothing
        }else{ ?>
        <a href="#" class="list-group-item list-group-item-action active">Authors</a>
        <?php foreach ($authors as $author) { ?>

      
        <a href="author.php?id=<?=$author['id']?>" class="list-group-item list-group-item-action"><?=$author['name']?></a>
          <?php } } ?>
      </div>
      
    </div>
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function addToCart(bookId) {
        // Make an AJAX request to the server-side script
        $.ajax({
            type: 'POST',
            url: 'shoppingcart.php', // Replace with the actual path to your server-side script
            data: { bookId: bookId },
            success: function(response) {
                // Redirect to the cart page after successfully adding to the cart
                window.location.href = 'shoppingcart/cart.php';
            },
            error: function(error) {
                console.error('Error adding to cart:', error);
            }
        });
    }
</script>

</script>
</html>
