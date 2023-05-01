<?php
$con=new mysqli('localhost','root','','student_db');

if(!$con){
    die(mysqli_error($con));
}
?>