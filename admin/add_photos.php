
 <?php include 'header.php'; 
  include 'check.php'; 
include 'dbconfig.php';
$success="";
$ch="";
if(!isset($_REQUEST['a_id'])){
    
    header("location:create_album.php");
    
}else{
    $a_id=$_REQUEST['a_id'];
   
     $rss=mysqli_query($conn,"SELECT * FROM `album` WHERE A_id='$a_id'");
    if(mysqli_num_rows($rss)<1)
    { $che="F";
       header("location:create_album.php");
    }
}

if(isset($_POST['submit']) and $ch!="F"){
    
    extract($_FILES);
   extract($image1);
$count=count($name);
  $total_size=0;
    $maxsize=150*1000*1000;
    $maxnumber=40;
     
     for($i=0;$i<=$count-1;$i++){
         $total_size=$total_size+$size[$i];
         
     }
if($count<=48&& $total_size<=$maxsize )
{ 
    for($i=0;$i<=$count-1;$i++){
    if(move_uploaded_file($tmp_name[$i],"../img/".basename($name[$i])))
    {    
         $size[$i]=$size[$i]/(1000);
     $sql="INSERT INTO `photo` (`photo_name`, `photo_id`, `photo_size`, `address`) VALUES ('$name[$i]', NULL, '$size[$i]', 'img/$name[$i]')";
     if(mysqli_query ($conn,$sql))
     {
        $sql2=" INSERT INTO `make_album` (`M_id`, `P_id`, `A_id`) VALUES (NULL, '".mysqli_insert_id($conn)."', '$a_id')";
         if(mysqli_query ($conn,$sql2))
         {
              $success="<div class='alert alert-success'>Sucessfully Inserted</div>";
    
         }
     }
     
        
    }
}
}
else{
    echo "Sorry" ;
    }



}
   ?>

<!--
   <form method="post" enctype="multipart/form-data">
    <table>
        <tr><td><input type="file" name="image1[]" multiple="" class="file-loading"></td></tr>
        <tr><td><input type="submit" name="submit"></td></tr>
        
    </table>
  
    
    </form>
-->
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">    <?php echo $success; ?>    
     <form method="post" enctype="multipart/form-data">
                <input id="file-0a" class="form-control" name="image1[]" class="file" type="file" multiple data-min-file-count="1">
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
       </div>
    </section>
    <?php include 'footer.php'; ?>