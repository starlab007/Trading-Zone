<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png">

    <title>TradingZone</title>
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">

<link rel="stylesheet" type="text/css" href="css/new/image.css">
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
      <link href="css/new/search.css" rel="stylesheet">
<style type="text/css">
  .box{
 
  background-image: url(images/banner.jpg);
  background-size: cover;
}
body{
  background-color: #E8E8E8;
}
</style>

  </head>



  <body class="text-center">
    <!--Start of header Start of header-->
      <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="70px" width="80px">TZone</a>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <p class="pak"> Pakistan's biggest advertisement Market</p>
            </li>
          </ul>
         
        </div>
        <form class="form-inline mt-2 mt-md-0">

           <a href="chat_index.php"class="btn btn-outline-primary my-2 mr-sm-3"> Live Chat</a>
          <a href="login.html" class="btn btn-outline-primary my-2 mr-sm-3"><i class="fa fa-user">  </i>  My account</a>
             
          <a href="verify_phone.php" class="btn btn-outline-primary my-2 my-sm-0"> Submit an Ad</a>
            
          
          </form>

      </nav>
    </header>

    <!--End of header End of header-->

 <!--search the itme using php php php php php php php-->
   


 <!--Start of searh form Start of searh form-->
<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="box">
    <div class="card-body">
      
<form method="POST" enctype="multipart/form-data" action="searched_result.php">
  
  <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
               <div class="inputicon">

        <input  class="form-control mr-sm-2" type="text" class="fa-map-marker-alt" placeholder= " All Pakistan" aria-label="Search">
    <i class="fa fa-map-marker" aria-hidden="true"></i>
         </div>
              </div>
              <div class="col-md-4">
              <div class="inputicon">
    <input class="form-control mr-sm-2" type="text" placeholder="Ads near You" aria-label="Search" name="search">  
       <i class="fa fa-search" aria-hidden="true"></i>
          </div>
                
          </div>
              
               <div class="col-md-2">
                 <button class="btn btn-outline-primary my-2 my-sm-0 btn-block" type="submit" name="submit"> <i class="fa fa-search"></i> Search</button>
              </div>
              </div>
            </div>

</form>
</div>
</div>
</div>
</div><br/><br/>



<!-- result on page load -->
<div class="container">
          <?php

            $conn=new mysqli("localhost","root","","webdev");

            $resultset=$conn->query("SELECT * FROM ads order by id desc");



            if($resultset->num_rows>0){
              while ($row=$resultset->fetch_assoc())
              {
                  $video_id=$row['id'];         
                  $name=$row['name'];
                  $phone=$row['phone'];
                  $location=$row['location'];
                  $city=$row['city'];
                  $title=$row['title'];
                  $category=$row['category'];
                  $price=$row['price'];
                  $description=$row['description'];
                  $images=$row['image'];
                  $images2=$row['image2'];
                  $images3=$row['image3'];
                  $images4=$row['image4'];
                  $images5=$row['image5'];
                  $images6=$row['image6'];
                  $date=$row['ad_date'];
                 ?>

<style type="text/css">
.tftable {font-size:12px;width:100%;border-width: 1px;border-collapse: collapse;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-color:#ffffff;padding: 8px;border-style: solid;}  
</style>

   <main role="main" class="container">
        
                        <table class="tftable" border="1">
              <tr><td rowspan="5"> 
                           <video width="400" controls>
 <source src="uploaded_videos/<?php echo $row['video_location']; ?>" type='video/mp4'>
</video>

              </td><td colspan="2" align="left"><font size="4" color="red"><b><?php echo $title; ?></b></font></td><td></td><td><font size="5" color="green">Rs.<?php echo "$price"; ?></font></td></tr>

              <tr><td rowspan="4" colspan="2" align="left"><h6><?php echo "$description <br/><br/><br/>";
                echo "$city, $location <br/><br/>";
                echo "Uploaded on<br/>"."$date"; ?></h6></td><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td onclick="this.innerHTML='<h6><?php echo $row['phone'];?></h6>'" height="55px" bgcolor="#E66E00"><font color="white"><b>VIEW NUMBER <i class="fa fa-phone"></i></b></font><br></td></tr>

              <tr ><td rowspan="2" height="40%" width="40%">   
                        <?php
                       

                         echo "<div class='gallery'>";
                       if(!empty($row['image'])){
                           
                           echo "<a href='uploaded_images/".$row['image']."' data-lightbox='mygallery'><img  src='uploaded_images/".$row['image']."'></a>";echo "&nbsp";
                           }
                           else{
                            echo "&nbsp";
                           }

                           if (!empty($row['image2'])) {
                            echo "<a href='uploaded_images/".$row['image2']."' data-lightbox='mygallery'><img src='uploaded_images/".$row['image2']."'></a>";echo "&nbsp";
                           }
                           else{
                            echo "&nbsp";
                           }


                       if (!empty($row['image3'])) {
                            echo "<a href='uploaded_images/".$row['image3']."'data-lightbox='mygallery'><img src='uploaded_images/".$row['image3']."'></a>";echo "&nbsp";
                           }
                           else{
                            echo "&nbsp";
                           }
                           
                            if (!empty($row['image3'])) {
                            echo "<a href='uploaded_images/".$row['image4']."'data-lightbox='mygallery'><img src='uploaded_images/".$row['image4']."'></a>";echo "&nbsp";
                           }
                           else{
                            echo "&nbsp";
                           }
                           if (!empty($row['image3'])) {
                            echo "<a href='uploaded_images/".$row['image5']."'data-lightbox='mygallery'><img src='uploaded_images/".$row['image5']."'></a>";echo "&nbsp";
                           }
                           else{
                            echo "&nbsp";
                           }
                           if (!empty($row['image3'])) {
                            echo "<a href='uploaded_images/".$row['image6']."'data-lightbox='mygallery'><img src='uploaded_images/".$row['image6']."'></a>";echo "&nbsp";
                           }
                           else{
                            echo "&nbsp";
                           }
                        
                            echo "</div>";
                        ?>  
                  </td><td> </td><td> </td><td> </td><td> </td></tr>

              <tr ><td></td><td></td><td></td><td height="55px" bgcolor="green"><font color="white"><b> SEND EMAIL  <i class="fa fa-envelope">   </i></b></font></td></tr>


              </table><br/>
  </main>

 <?php
                        } 
              } 
            else{
              $output= "No record Found";
            }

          ?>
</div>

<!-- result on page load -->




<br>


<!--Start of crouscal-->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
    <!-- crouscal  1 -->
          <div class="carousel-item active img-responsive">
            <img class="first-slide" src="images/mobile.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <!-- end of crouscal  1 -->
      
          <!-- crouscal  2 -->
          <div class="carousel-item img-responsive">
            <img class="second-slide" style="width:100%" src="images/car.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          
          <!-- end of crouscal  2 -->
      
          <!-- crouscal  3 -->
          
          <div class="carousel-item img-responsive">
            <img class="third-slide" src="images/house.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
      <!-- end of crouscal  3 -->
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
 <!-- end of crouscal -->



 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
   
    <script src="js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    

    </body>
    </html>

