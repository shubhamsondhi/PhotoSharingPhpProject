
<?php
include 'header.php';
include 'dbconfig.php';
 $found="";
    $err="";
$success="";
if(isset($_POST['submit']))
    {
     extract($_POST);
    $rs=mysqli_query($conn,"SELECT * FROM `admin` WHERE e_mail='$email'") ;
    if(mysqli_num_rows($rs)<1)
	{
         //insert the admin after checking admin
    
   $sql=" INSERT INTO `admin` (`first_name`, `Last_name`, `Admin_id`, `e_mail`, `password`, `Address`, `city`, `mobile_number`, `pincode`) VALUES ('$fname', '$lname', NULL, '$email', '$password', '$address', '$city', '$mob', '$pin')";
    
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
     <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
    <form method="post" ><?php echo $err ?><?php echo $success ?>
    <table class="table">
        <tr>
        <td>First Name</td>
        <td><input class="form-control"  type="text" name="fname" id="Name" required>
            </td></tr>
            <tr>
        <td>Last Name</td>
        <td><input class="form-control" type="text" name="lname" id="Name" required>
            </td></tr>
            <tr>
        <td>Mobile Number</td>
        <td><input class="form-control" type="number" name="mob" id="mob"  required>
            </td></tr>
           
        <tr><td>E-mail</td>
        <td><input class="form-control" type="email" name="email"  required></td></tr>
         <tr>
        <td>Password</td>
        <td><input class="form-control" type="Password" name="password"  required></td></tr>
         <tr>
        <td>address</td>
        <td><textarea class="form-control" type="text" name="address" id="address" >
            </textarea> </td></tr>
             <tr>
        <td>City</td>
        <td><input class="form-control" type="text" name="city" id="city" required>
            </td></tr>
           <tr>
        <td>Pin Code</td>
        <td><input class="form-control" type="number" name="pin" id="pin"  required>
            </td></tr>
        
        <tr>
        <td><input class="form-control" type="Submit" name="submit"></td></tr></table></form>
        </div></section> <?php include 'footer.php'; ?>