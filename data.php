<?php
$connection = mysqli_connect('localhost', 'test', 'password', 'blog');

if (!$connection) {
    die('Connection Failed !' . mysqli_connect_error($connection));
};
?>
