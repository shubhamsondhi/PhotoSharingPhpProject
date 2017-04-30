<?php $user="root";
$password="";
$server="localhost";
$db="photo_sharing";
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn)
{
    die("error".mysqli_connect_error);
}
?>