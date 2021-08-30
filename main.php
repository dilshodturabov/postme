<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Post me</title>
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
</style>
<body>
<div class="container"><br>
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand active" style="font-weight: 800; font-size: 30px;" href="./main.php">POST me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span style="background: none ; border-radius: 5px; box-shadow: 0px  5px  5px #000;" class="navbar-toggler-icon">
      <img src="./site/fingerprint.png" alt="finger" class="img-fluid">
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a style="color: #fffffe;" class="nav-item nav-link" href="./all-posts.php">ALL POSTS</a>
    </div>
  </div>
</nav>
</div>
<!-- NAVBAR STOP -->

<div class="container my-5">
  <h1 class="text-start" style="font-weight: 700; line-height:70px; color: #fffffe;">POST me is the blogging website which allows users to add, read and delete posts</h1>
  <h4 class="text-start" style="font-weight: 700; line-height:40px; color: #a7a9be;">This web application was created to fulﬁll Web Technology module’s requirements and does not represent an actual company or service</h4><br>
  <a href="./create-blog.php" style="background-color:#ff8906!important; border: none; color:#fffffe;" class="btn btn-outline-primary">ADD POST >me< </a>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>