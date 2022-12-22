<?php include "../database.php";?>
<?php session_start();?>
<?php
$login = $_POST['login'];
$password = $_POST['password'];
$loginTest = '/^[A-Za-z0-9]+$/i';

$sql = "SELECT `id` FROM `user` WHERE `login`='$login' AND `password`='$password'";
$result = mysqli_query($induction, $sql);
while($data = mysqli_fetch_assoc($result)){
    $id = $data["id"];
}
if($id > 0 and preg_match($loginTest, $login)){
    $_SESSION['login'] = "admin";
    header('Location:../admin.php');
}
else
    header('Location:../login/login.php');
    die();

?>




