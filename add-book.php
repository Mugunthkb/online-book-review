<?php

    include "db_conn.php";

    include "login/func_category.php";
    $categories = get_all_categories($conn);

    include "login/func_author.php";
    $authors = get_all_author($conn);


    if (isset($_GET['title'])) {
      $title = $_GET['title'];
    }else $title = '';

    if (isset($_GET['desc'])) {
      $desc = $_GET['desc'];    
    }else $desc = '';

    if (isset($_GET['category_id'])) {
      $category_id = $_GET['category_id'];
    }else $category_id = 0;

    if (isset($_GET['author_id'])) {
      $author_id = $_GET['author_id'];
    }else $author_id = 0;
?>
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
       <form action="login/add-book.php" method="POST"
             enctype="multipart/form-data" 
       class="shadow p-4 rounded mt-5" style="width: 90%; max-width: 50rem;">
        <h1 class="text-center pb-5 display-4 fs-1">
          ADD NEW BOOKS
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
          <label class="form-label">BOOK PUBLISHER</label>
          <input type="text" class="form-control" name="book_condition" >
        </div>
        <div class="mb-3">
          <label class="form-label">BOOK TITLE</label>
          <input type="text" 
                 class="form-control" 
                 value="<?=$title?>"
                 name="book_title">
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
                  if ($author_id == $author['id'])
                   {

                
                ?>
               <option
                selected 
                value="<?=$author['id']?>">
                <?=$author['name']?>
              </option>
            <?php }else{ ?>

              <option
                
                value="<?=$author['id']?>">
                <?=$author['name']?>
              </option>

           <?php } }} ?>

          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">DESCRIPTION</label>
          <input type="text" 
                 class="form-control" 
                 value="<?=$desc?>"
                 name="book_description">
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
                  if ($category_id == $category['id']) {
                    ?>
               <option 
                selected
                value="<?=$category['id']?>">
                <?=$category['name']?>
              </option>
              <?php }else{ ?>
                <option 
                value="<?=$category['id']?>">
                <?=$category['name']?>
              </option>
            <?php } } } ?>
          </select>
        </div>
          <div class="mb-3">
          <label class="form-label">COVER</label>
          <input type="file" class="form-control" name="book_cover">
        </div>
        <div class="mb-3">
          <label class="form-label">FILE</label>
          <input type="file" class="form-control" name="file">
        </div>
        <div class="mb-3">
          <label class="form-label">PRICE</label>
          <input type="text" class="form-control" name="price">
        </div>
		 <div class="mb-3">
          <label class="form-label">Youtube Link</label>
          <input type="text" class="form-control" name="ylink">
        </div>
		 <div class="mb-3">
          <label class="form-label">Buying Link</label>
          <input type="text" class="form-control" name="blink">
        </div>
           

        <button type="submit" class="btn btn-info">ADD BOOK</button>

     </body>
     </html>
