<?php
include 'header.php';
include 'check.php';
include 'dbconfig.php';
 $u_id=$_SESSION["user"];
       
?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
<div class="container">
        
        
 <div class="row">
    <form method="post"><table class="table"><tr>
        <td><select  class="form-control" name="A_id"><option>select</option>
                <?php
       
        
                $sql1="SELECT * FROM `album` WHERE user_id='$u_id'";
                $result=mysqli_query($conn,$sql1);
//                while($row=mysqli_fetch_row($result)){
//                    $sql2="SELECT * FROM `make_album` WHERE A_id='$row[1]'";
//                $result=mysqli_query($conn,$sql);
                    
                while($row=mysqli_fetch_row($result)){
                    echo"<option value='$row[1]'>$row[0] Date   $row[2]</option>";
                
                }
                ?>
     </select></td>
        <td> <input type="submit" class="btn btn-info" name="submit">
    </td>
    </tr></table>
    </form>
        
    <?php 
//     showing the photos here
      if(isset($_POST['submit'])){
          $A_id= $_POST['A_id'];
                    $sql2="SELECT * FROM `make_album` WHERE A_id='$A_id'";
                $result2=mysqli_query($conn,$sql2);
                    
                while($row0=mysqli_fetch_row($result2)){
                    
                $sql3="SELECT * FROM `photo` WHERE photo_id='$row0[1]'";
                $result3=mysqli_query($conn,$sql3);
             $row1=mysqli_fetch_row($result3);
		echo " <a href='$row1[3]' download> <div class='col-md-3 col-sm-4 col-xs-6'><img class='img-responsive' src='$row1[3]' /> </a></div>";
     
     } } ?>
     
    </div>
            </div>
        
        </div></section><?php include 'footer.php'; ?>