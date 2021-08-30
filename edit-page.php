<?php
// include 'data.php';
$connection = mysqli_connect('localhost', 'test', 'password', 'blog');

if ($connection->connect_error) {
    die('Connection Failed !' . mysqli_connect_error($connection));
};

// updating info from database
if(isset($_POST['submit'])){
  echo"<script> alert('Do you really want edit that!?')</script>";
  $author = $_POST['author'];
  $title = $_POST['title'];
  $post = $_POST['post'];
  $updated =  $_GET['update'];

  // echo $id , $title, $author, $post;
  $query = 'UPDATE posts SET  ';
  $query .= "author='$author', ";
  $query .= "title='$title', ";
  $query .= "post='$post' ";
  $query .= "WHERE id=$updated ";
  $result = mysqli_query($connection, $query);
  if(!$result){
    echo 'numi';
  }
  header("Location: all-posts.php");
}

$iden = $_GET['update'];
$query = "SELECT * FROM posts ";
$query .= "WHERE id=$iden;";

$effect = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($effect)) {
  $post_id = $row['id'];
  $author2 = $row['author'];
  $title2 = $row['title'];
  $post2 = $row['post'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title> CHANGE POSTS  </title>
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
  .container{
    padding: 0 10%;
  }
</style>


<body>
<div id="dark-overlay">
  <div class="container">
  <!-- navbar -->
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
  <!-- navbar is stop -->
  <div class="container">
      <div class="container">
        <div class="col-xs-12">
          <h1 class="text-center">Change Post</h1>
            <form action="edit-page.php?update=<?php echo $post_id; ?>" method="post" enctype="multipart/form-data">
              <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" value="<?php echo $author2; ?>"><br>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $title2; ?>"><br>
                <label for="post">Post</label>
                <textarea name="post" id="post" name="post" cols="30" rows="10" class="form-control"><?php echo $post2; ?></textarea>
                <input type="submit" name="submit" value="UPDATE" class="btn btn-primary my-3 form-control">
            </form>
        </div>
      </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>