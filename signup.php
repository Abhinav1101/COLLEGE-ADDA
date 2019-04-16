<?php
session_start();

//header('location:signup page.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'student');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile_number'];
$u_name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from registration where Username='$u_name'";//there is differnce of name and username of my and that video.

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);//don't forget to write rows not row here.

if($num==1){
    echo "username is already taken";
}
else{
    $reg = "insert into registration(Name,Email_id,Mobile_Number,Username, password) values ('$name', '$email' , '$mobile' , '$u_name' , '$pass')";
    mysqli_query($con, $reg);
    echo "registration successful";
}


?>