<?php
$u1=$_POST['Name'];
$u2=$_POST['Password'];
include 'dbconfig.php';
echo "$u1";
$sql="INSERT INTO admin(A_name,A_id,A_date,A_prize,A_size,user_id)
    VALUES ('asd','123','4','24','56','123')";
if(mysqli_query($conn,$sql));
{
    echo "value sucessfully insered";
    
}
?>