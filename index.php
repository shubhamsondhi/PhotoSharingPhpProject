 <?php include 'header.php'; 
      
     ?><header style="background-image: url('best/<?=$_REQUEST['id'];?>.jpg');">";
        <div class="container">
         <div class="intro-text">
          <div class="container a1 "><div id="carousel">
    	<?php 
     for($i=0;$i<9;$i++){
		echo "<figure><img src='best/$i.jpg' class='size img' alt=''></figure>";
     
     }  ?></div>
              </div>	
            </div>
<!--
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div> 
        </div>
-->
            </div>
            
    </header>
    

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
               <?php
                for($i=1;$i<50;$i++){
         echo " <div class='col-md-4 col-sm-6 portfolio-item'>
                    <a href='index.php?id=$i' class='portfolio-link' data-toggle='modal'>
                        <div class='portfolio-hover'>
                            <div class='portfolio-hover-content'>
                                <i class='fa fa-plus fa-3x'></i>
                            </div>
                        </div>
                        <img src='best/$i.jpg' class='img-responsive' alt=''>
                    </a>
                    <div class='portfolio-caption'>
                        <h4>Image $i</h4>
                        <p class='text-muted'>Graphic Design</p>
                    </div>
                </div>";
}
       ?>
        </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>