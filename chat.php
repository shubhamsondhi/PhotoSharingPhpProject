<?php
if(!isset($_SESSION["USER"]))
{
    header("location:login.php");
}
$user=$_SESSION["USER"];
$sql="SELECT * FROM chat where uid='$user'";
$resutl=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
    
   echo "<img src='$row[2]' class='photos'>";
    
    
    }?>
<div><textarea name="chat" >
    
    
    
    
</textarea>


</div>
