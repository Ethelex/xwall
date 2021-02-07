<?php
include_once 'dbh.php';

$color = $_POST['color'];
$message = $_POST['message'];

$sql = "INSERT INTO posts(color,message) VALUES ('$color','$message');";
if (mysqli_query($conn, $sql)) {
    echo '<font color="green">Post created.</font>';
} else {
    echo '<font color="red">' . mysqli_error($conn) . '</font>';
}

header('Location: ../');
