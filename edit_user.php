
<?php
 include 'header.php';
include 'dbconfig.php';
$sql= "SELECT * FROM user";
$resutl=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
    
    if($u==$row[1]&&$password==$row[2]){
        
        $_SESSION['username']=$row["name"];
        header("location:home.php");
        
    }
}

?>
    <table class="table">
        <tr>
        <td>Name</td>
        <td><input class="form-control" type="text" name="Name" id="Name">
            </td></tr>
        <tr>
        <td>Mobile_number</td>
        <td><inpu class="form-control" type="text" name="Mobile_number" ></td></tr>
         <tr>
        <td>City</td>
        <td><input class="form-control" type="text" name="City" ></td></tr>
        <tr>
            <td><input class="btn btn-info" type="Submit" name="Submit"></td></tr></table></div></body></html>