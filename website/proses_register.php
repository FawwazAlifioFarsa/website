<?php include './koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "
insert into users 
values ('".$username."','".$email."','".$phone."','".$password."');";

if($_POST){
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($phone)){
        echo "<script>alert('Phone Number tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($confirm_password)){
        echo "<script>alert('Confirm password terlebih dahulu');location.href='register.php';</script>";
    } elseif($_POST["password"] !== $_POST["confirm_password"]) {
        echo "<script>alert('Confirm password salah');location.href='register.php';</script>";
    } elseif($_POST["password"] === $_POST["confirm_password"]) {
        $result = mysqli_query($conn, $sql);
        if($result){ 
            echo "Data Created"?><br>
            <a href="login.php"></a><?php
        }else{
            printf('Failed create account: '.mysqli_error($conn));
            exit();
        }      
    } else{
        echo "Error";
    }
}
?>