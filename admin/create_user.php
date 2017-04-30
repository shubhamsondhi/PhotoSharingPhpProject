<?php
include 'header.php';
 include 'check.php'; 
include 'dbconfig.php';
 $found="";
    $err="";
$success="";
if(isset($_POST['submit']))
    {
     extract($_POST);
    $rs=mysqli_query($conn,"SELECT * FROM `user_table` WHERE e_mail='$email'") ;
    if(mysqli_num_rows($rs)<1)
	{
         //insert the admin after checking admin
    
    $sql=" INSERT INTO `user_table` (`user_name`, `user_id`, `mobile_number`, `Address`, `e_mail`, `password`, `city`, `pincode`) VALUES ('$fname', NULL, '$mob', 'ss', '$email', '$password', '$city', '123')";
        if(mysqli_query ($conn,$sql))
     {
         
     $success="<div class='alert alert-success'>Sucessfully Inserted</div>";
     }
       
 }else
	{
        $found="N";
    }
 }
 if($found=="N"){
     
     $err="<div class='alert alert-warning'>Email Already Exist</div>";
 
 }
   
 

?>
   <section id="portfolio" class="bg-light-gray">
        <div class="container"> 
    <form method="post" ><?php echo $success; ?><?php echo $err; ?>
    <table class="table">
        <tr>
        <td>First-name</td>
        <td><input class="form-control"type="text" name="fname" id="first-name" required>
            </td></tr>
        <tr>
        <td>Password</td>
        <td><input type="password" class="form-control" name="password" id="password" required></td></tr>
        <tr>
        <td>E-mail</td>
        
        <td><input type="email" name="email" class="form-control" id="e-mail" required></td></tr>
        <tr>
        <td>Address</td>
        
            <td><textarea type="text" name="address" class="form-control" id="address" required></textarea></td></tr>
        <tr>
            <td>Mobile-number</td>
        <td><input type="number" name="mob" class="form-control" id="mobile_number" required></td></tr>
         <tr>
             <td>City</td>
        <td><input type="text" name="city" class="form-control" id="city" ></td></tr>
        
        <tr><td></td>
        <td><input type="submit"class="btn btn-info" value="submit" name="submit"></td>
        </tr>
        </table>
        </form>
       </div>
    </section>
    <?php include 'footer.php'; ?>