	<?php
session_start();

//header('location:signup page.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'student');

/*$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile_number'];*/
$u_name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from admin_login where username='$u_name' && password='$pass'";//there is differnce of name and username of my and that video.

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);//don't forget to write rows not row here.

if($num==1){
    header('location:admin.php');
}
else{
    header('location:admin_login.php');
}

?>
