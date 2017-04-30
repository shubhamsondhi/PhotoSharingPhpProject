
<?php
include 'header.php';
 include 'check.php'; 

include 'dbconfig.php';
if(isset($_POST['Submit'])){
    extract($_POST);
    $date=date("Y/m/d");
$sql="INSERT INTO `album` (`A_name`, `A_id`, `A_date`, `A_prize`, `A_size`, `user_id`) VALUES ('$name', NULL, '$date', '$price', '$size', '$u_id')";
if(mysqli_query($conn,$sql));
{
 header("location:add_photos.php?a_id=".mysqli_insert_id($conn) ."&user_id=$u_id");
}
}
    ?><section id="portfolio" class="bg-light-gray">
        <div class="container"> 
    <form  method="post">
    <table class="table" class="form-control">
        <tr>
        <td>Name</td>
        <td><input class="form-control"type="text" name="name" id="Name">
            </td></tr>
        <tr>
<td>User_name</td>
        
                <td>
            <select class="form-control" name="u_id"><option>select</option>
                <?php 
                $sql1="SELECT * FROM `user_table`";
                $result=mysqli_query($conn,$sql1);
                while($row=mysqli_fetch_row($result)){
                    echo"<option value='$row[1]'>$row[4]</option>";
                }
                ?>
            </select>
        </td>
                
                </tr>
                 <tr>
            <td>Price</td>
        <td><input class="form-control" type="text" name="price"></td></tr>
        
             <tr>
            <td>Size</td>
        <td><input class="form-control"type="text" name="size"></td></tr>
        <tr><td></td>
        <td><input class="form-control btn-info"type="Submit" name="Submit"></td></tr></table></form> </div>
    </section>
    <?php include 'footer.php'; ?>