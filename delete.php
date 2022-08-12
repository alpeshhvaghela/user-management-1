<?php
include("connection.php");
$id = $_GET['id'];
$sql ="delete from `user` where id = $id"; 
try {
    mysqli_query($conn,$sql);
    header("Location:index.php?message=record delete suceessfully");
}   
catch(Exception $e ){
    header("Location:index.php?message_error=record not delete");
}
?>