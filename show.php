<?php 
include 'data.php';

if(isset($_GET['unshow'])){
  echo"<script> alert('Do you really want that?')</script>";
  $unshow = $_GET['unshow'];
  $query = "DELETE FROM posts ";
  $query .= "WHERE id = $unshow";
  $mysqli = mysqli_query($connection, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>SHOW POST  me</title>
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
  p{
    color: #a7a9be;
  }
  h5{
    color: #fffffe;
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
      <a class="nav-item nav-link" href="./all-posts.php">ALL POSTS</a>
      <a class="nav-item nav-link" href="./create-blog.php">PUSH</a>
    </div>
  </div>
</nav><br>
</div>
<div class="container">
  <?php 
    $id = $_GET['id'];
    $query = "SELECT * FROM posts ";
    $query .= "WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if(!$result){
      echo "we don't connected";
    }
    while($row = mysqli_fetch_assoc($result)): 
  ?>
  <div class="row">
    <h2 class="text-center" style="color: #ff8906;"> <span style="font-size: 12px; color:#999;">POST'S TITLE IS ---</span>   <?php echo $row['title'] ?></h2>
    <div class="col-md-6">
      <img src="./images/<?php echo $row['picture']?>" class="img-fluid" alt="special">
    </div>
    <div class="col-md-6">
      <div"><p><?php echo $row['post'] ?></p></div>
    </div>
<div class="row mt-4">
  <div class="col-md-6 text-start mt-2">
    <h5> <span style="font-size: 12px; text-decoration: none; color: #ff8906; ">Directed by _</span>  <?php echo $row['author'] ?> ///</h5>
    <p><?php echo $row['created_at'] ?></p>
  </div>
  <div class="col-md-6 d-flex align-items-center justify-content-end ">
    <a href="edit-page.php?update=<?php echo $row['id'] ?>" name="edit" class="btn btn-outline-primary mx-5">Edit</a>
    <a href="show.php?unshow=<?php echo $row['id'] ?>" name="delete" class="btn btn-outline-danger">Delete</a>
  </div>
</div>
  <?php endwhile; ?>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>