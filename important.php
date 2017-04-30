<?php
if(!isset($_SESSION["USER"]))
{
    header("location:login.php");
}
$user=$_SESSION["username"];
$sql="SELECT * FROM photos where uid='$user'";
$resutl=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
    
   echo "<img src='$row[2]' class='photos'>";
    
    
    }
?> 