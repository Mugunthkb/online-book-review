<?php

 if (!isset($_GET['id'])){
    header("Location: admin.php");
    exit;
  }

  $id = $_GET['id'];

    include "db_conn.php";

    include "login/func_book.php";
    $book = get_book($conn, $id);


    if ($book == 0) {
      header("Location: admin.php");
    exit;

    }

    include "login/func_category.php";
    $categories = get_all_categories($conn);

    include "login/func_author.php";
    $authors = get_all_author($conn);

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book </title>
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
                <a class="nav-link active" aria-current="page" href="admin.php">ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">Book List</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="add-books.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Add New Books</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="add-author.php">Add Authors</a></li>
                  <li><a class="dropdown-item" href="add-categories.php">Add Categories</a></li>
                  <li><hr class="dropdown-divider"></li>
                  </ul>
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              </ul>
          </div>
       </nav>
       <form action="login/edit-book.php" method="POST"
             enctype="multipart/form-data" 
       class="shadow p-4 rounded mt-5" style="width: 90%; max-width: 50rem;">
        <h1 class="text-center pb-5 display-4 fs-1">
          EDIT BOOKS
        </h1>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?=htmlspecialchars($_GET['error']); ?>
          </div>
          <?php } ?>
          <?php if (isset($_GET['success'])) { ?>
          <div class="alert alert-success" role="alert">
            <?=htmlspecialchars($_GET['success']); ?>
          </div>
          <?php } ?>
        <div class="mb-3">
          <label class="form-label">BOOK CONDITION</label>
          <input type="text" class="form-control" value="<?=$book['bookcondition']?>" name="book_condition">
          <input type="text" hidden  value="<?=$book['id']?>" name="book_id">
     
        </div>
        <div class="mb-3">
          <label class="form-label">BOOK TITLE</label>
          <input type="text" class="form-control" value="<?=$book['title']?>" name="book_title">
        </div>
        <div class="mb-3">
          <label class="form-label">AUTHOR ID</label>
          <select name="book_author" class="form-control">
            <option value="0">
                   Select Author
            </option>
            <?php 
              if ($authors == 0) {
              }else{
                foreach ($authors as $author) { 
                ?>
               <option value="<?=$author['id']?>">
                <?=$author['name']?>
              </option>
            <?php }  } ?>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">DESCRIPTION</label>
          <input type="text" class="form-control" value="<?=$book['description']?>" name="book_description">
        </div>
        <div class="mb-3">
          <label class="form-label">CATEGORY</label>
          <select name="book_category" class="form-control">
            <option value="0">
                   Select Category
            </option>
            <?php 
              if ($categories == 0) {
              }else{
                foreach ($categories as $category) { 
                ?>
               <option value="<?=$category['id']?>">
                <?=$category['name']?>
              </option>
            <?php }  } ?>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">PRICE</label>
          <input type="text" class="form-control" value="<?=$book['price']?>" name="book_price">
        </div>
		 <div class="mb-3">
          <label class="form-label">Youtube link</label>
          <input type="text" class="form-control" value="<?=$book['ylink']?>" name="book_price">
        </div>
		 <div class="mb-3">
          <label class="form-label">Buy ionk</label>
          <input type="text" class="form-control" value="<?=$book['blink']?>" name="book_price">
        </div>
        
        <button type="submit" class="btn btn-info">UPDATE</button>

     </body>
     </html>
