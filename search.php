<?php

  if (!isset($_GET['key']) || empty($_GET['key'])) {
    header("Location: index.php");
    exit;
  }
  $key = $_GET['key'];


    include "db_conn.php";

    include "login/func_book.php";
    $books = search_books($conn, $key);

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
                <a class="nav-link" href="browsetopbooks.php">Browse Top Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shopping Cart</a>
              </li>
              <li class="nav-item">
              </li>
              </ul>
            
          </div>
       </nav>
       <div class="container">
       Search result for <b><?=$key?></b>
       <div class="d-flex">
        <div class="d-flex pt-3">
          <?php if ($books == 0) { ?>
            <div class="alert alert-waring text-center p-5 book-list" role="alert">The key <b>"<?=$key?>"</b>didn't match to any record in the database</div>
          <?php }else{ ?>
    <div class="book-list d-flex flex-wrap">
      <?php foreach ($books as $book) { ?>

        <div class="card m-1">
            <img src="uploads/cover/<?=$book['cover']?>" class="card-img-top img-fluid">
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
                <button class="btn btn-info text-light" >BUY</button>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
</div>
</div>
</body>
</html>