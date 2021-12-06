<?php
$conn = mysqli_connect('127.0.0.1','root','','woods');
if(mysqli_connect_error()){
    printf('Connection failed: '.mysqli_connect_error());
    exit();
}