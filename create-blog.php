<?php 
include 'data.php';
  if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    $filename = $_FILES['picture']['name'];
    $tempName = $_FILES['picture']['tmp_name'];
    move_uploaded_file($tempName, "./images/$filename");

    mysqli_real_escape_string( $connection, $title );
    mysqli_real_escape_string( $connection, $author );
    mysqli_real_escape_string( $connection, $post );
    mysqli_real_escape_string( $connection, $filename );


    $query = 'INSERT INTO posts(author, title, post, picture) ';
    $query .= "VALUES( '$author', '$title', '$post', '$filename')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Connection Failed 2  !' . mysqli_connect_error($result));
    }
  header("Location: all-posts.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create POST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
  body{
    background-image: url(./site/bg.gif);
    background-attachment: fixed;
  }
  #dark-overlay{
    background: rgba(15, 14, 23, 0.925);
    height: 100%;
    width: 100%;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
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
  h1,h5{
    color: #fffffe;
  }
  label{
    color: #f25f4c;
  }
</style>

<body>
<div id="dark-overlay">
  <div class="container">
  <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" style="font-weight: 800; font-size: 30px" href="./main.php">POST me</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span style="background: none ; border-radius: 5px; box-shadow: 0px  5px  5px #000;" class="navbar-toggler-icon">
        <img src="./site/fingerprint.png" alt="finger" class="img-fluid">
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="./all-posts.php">ALL POSTS </a>
        <a class="nav-item nav-link active" href="./create-blog.php">PUSH</a>
      </div>
    </div>
  </nav><br>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 pt-5">
        <img src="./site/company.png" class="img-fluid mt-5" alt="company">
      </div>
      <div class="col-md-6">
        <h1 class="text-center">Create Post</h1>
          <form action="create-blog.php" method="post" enctype="multipart/form-data">
              <label for="author">Author</label>
              <input type="text" id="author" name="author" placeholder="Who owns the post " class="form-control"><br>
              <label for="title">Title</label>
              <input type="text" id="title" name="title" placeholder="Post title" class="form-control"><br>
              <label for="picture">Choose File</label>
              <input type="file" id="picture" name="picture" class="form-control"><br>
              <label for="post">Post</label>
              <textarea name="post" id="post" name="post" cols="30" rows="7" placeholder="There is for your posts history " class="form-control"></textarea>
              <input type="submit" name="submit" value="PUSH" class="btn btn-success my-2 form-control">
          </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
  
</body>
</html>