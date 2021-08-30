<?php

use phpDocumentor\Reflection\Location;

include 'data.php';

$query = 'SELECT * FROM posts';

$result = mysqli_query($connection, $query);
if (!$result) {
    die('Connection Failed !' . mysqli_connect_error($result));
}

// deleting info from database
if(isset($_GET['delete'])){
  echo"<script> alert('Do you really want delete that!?')</script>";
  $id = $_GET['delete'];
  $query = "DELETE FROM posts ";
  $query .= "WHERE id = $id";
  $mysqli = mysqli_query($connection, $query);
  header("Location: all-posts.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title> ALL POSTS  </title>
</head>

<style>
  body{
    background-color: #0f0e17;
  }
  a{
    color: #fffffe!important;
  }
  .active{
    color: #ff8906!important;
  }
  h2.forme{
    color: #ff8906 !important;
  }
</style>

<body>
<div class="container"><br>
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" style="font-weight: 800; font-size: 30px" href="./main.php">POST me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span style="background: none ; border-radius: 5px; box-shadow: 0px  5px  5px #000;" class="navbar-toggler-icon">
      <img src="./site/fingerprint.png" alt="finger" class="img-fluid">
    </span>
 </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="./all-posts.php">ALL POSTS</a>
      <a class="nav-item nav-link" href="./create-blog.php">PUSH</a>
    </div>
  </div>
</nav><br>
</div>

<!-- NAVBAR STOP -->

<div class="container text-end">
    <div class="container">
      <div class="row">
        <?php 
          while($row = mysqli_fetch_assoc($result)):
        ?>
          <div class="col-md-4">
            <a href="show.php?id=<?php echo $row['id']?>" style="text-decoration: none; color: #000;">
              <img style="width:348px; height:195px;" src="./images/<?php echo $row['picture']; ?>" class='img-fluid'  alt='for image' />
              <h2 class="forme"><?php echo $row['title']; ?></h2>
              <a href="all-posts.php?delete=<?php echo $row['id']; ?>" class="form-control btn btn-outline-danger">DELETE</a><br><br>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>