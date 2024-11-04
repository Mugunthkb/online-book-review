
<?php

    include "db_conn.php";

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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Add New Books</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="add-author.php">Add Authors</a></li>
                  <li><a class="dropdown-item" href="add-categories.php">Add Categories</a></li>
                  <li><a class="dropdown-item" href="add-book.php">Add Books</a></li>
                  <li><hr class="dropdown-divider"></li>
                  </ul>
                  </li>
				  
				  
				   <li class="nav-item">
              </li>
				  
				  
				   <li class="nav-item">
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              </ul>
          </div>
       </nav>
       
       <?php if ($books == 0) { ?>
            empty
          <?php }else {?>
       <!---- book list-------------------------------------->
       <h4 class="mt-5">All Books</h4>
    <table class="table table-bordered shadow">
      <thead>
        <tr>
          <th>Id</th>
          <th>Book Condition</th>
          <th>Title</th>
          <th>Author</th>
          <th>Description</th>
          <th>Category</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i = 0;
        foreach ($books as $book) { 
           $i++;
           ?>
        <tr>
        <td><?=$i?></td>
        <td><?=$book['bookcondition']?></td>
        <td>
          <img width="100" class=" d-block text-center"
          src="uploads/cover/<?=$book['cover']?>" >
          
          <a class="link-dark d block text-center" href="uploads/files/<?=$book['file']?>">

            <?=$book['title']?>
        </td>
        <td>
            <?php if ($authors == 0){
              echo "Undefined";}else{   
                foreach ($authors as $author) {
                  if ($author['id'] == $book['author_id']) {
                    echo $author['name'];
                  }
                }  
              }
              ?>
        </td>
        <td><?=$book['description']?></td>
        <td>
           <?php if ($categories == 0){
              echo "Undefined";}else{   
                foreach ($categories as $category) {
                  if ($category['id'] == $book['category_id']) {
                    echo $category['name'];
                  }
                }  
              }
              ?>
        </td>
        <td><?=$book['price']?></td>
        <td>
          <a href="edit-book.php?id=<?=$book['id']?>" class="btn btn-dark">Edit</a>
          <a href="login/delete-book.php?id=<?=$book['id']?>" class="btn btn-info">Delete</a>
        </td>
      </tr>
       <?php } ?>
      </tbody>
    </table>
  <?php }?>

  <?php if ($categories == 0) { ?> 
    <div class="alert alert-waring text-center p-5"
         role="alert">
         There is no categories in the database
    </div>
  <?php }else {?>

  <!--- categories---->
  <h4 class="mt-5">Categories of Books</h4>
  <table class="table table-bordered shadow"> 
    <thead>
      <tr>
        <th>Id</th>
        <th>Categories</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $j = 0;
      foreach ($categories as $category ) {
        $j++;
        ?>
        <tr>
          <td><?=$j?></td>
          <td><?=$category['name']?></td>
          <td>
            <a href="edit-category.php?id=<?=$category['id']?>" class="btn btn-dark">Edit</a>
          <a href="login/delete-category.php?id=<?=$category['id']?>" class="btn btn-info">Delete</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>

<!----Author----->

<?php if ($authors == 0) { ?>
  empty
<?php }else {?>
  <h4 class="mt-5">Authors Name</h4>
  <table class="table table-bordered shadow"> 
    <thead>
      <tr>
        <th>Id</th>
        <th>Authors</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $k = 0;
      foreach ($authors as $author ) {
        $k++;
        ?>
        <tr>
          <td><?=$k?></td>
          <td><?=$author['name']?></td>
          <td><a href="edit-author.php?id=<?=$author['id']?>" class="btn btn-dark">Edit</a>
          <a href="login/delete-author.php?id=<?=$author['id']?>" class="btn btn-info">Delete</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } ?>

  <!----users books uploading list---->
   

   
  


</body>
</html>