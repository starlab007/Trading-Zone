<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Post an Ads</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/new/search.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    
  <style type="text/css">
  
   .bg{
  background-image: url('images/login.png');
  width: 100%;
  height: 100vh;
}
.form-container{
  border: 0px solid #fff;
  margin-top: 3vh;
  -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
  -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
  box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);

}

select{
  height: 30px;
  padding: 5px;
  color: green;
}
select option { color: black; }

}


</style>
    
</head>

<body class="bg">
    
    <!-- header header header header header header header header header header -->
    
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
       

      </nav>
    </header>
    
    
    <!-- header header header header header header header header header header -->
    
    
  <div class="container body col-md-6">
    <div class="card card-header mx-auto mt-5 form-container">
      <div class="card-header"><h4>Update the Personal Detail</h4></div>
        
      <div class="card-body">
                                                                                            <!-- starting of form starting of form-->
          
          <?php
          $id=$_GET['idx'];
          $mysqli=new mysqli("localhost","root","","webdev");
          $query=$mysqli->query("select * from ads where id='$id' limit 0,1");
          $row=$query->fetch_assoc();
          if(isset($_POST['update'])){
          $id=$_POST['id'];
          $nn=$_POST['name'];
          $ph=$_POST['phone'];
          $pr=$_POST['price'];
          $ds=$_POST['description'];
          $result=$mysqli->query("update ads set name='$nn',phone='$ph',price='$pr',description='$ds' where id='$id'");

       $mysqli->query($result);
       $lastid = $mysqli->insert_id;

    $image = $_FILES['image']['name'];
    $image2= $_FILES['image2']['name'];
    $image3= $_FILES['image3']['name'];
    $image4= $_FILES['image4']['name'];
    $image5= $_FILES['image5']['name'];
    $image6= $_FILES['image6']['name'];

    $target = "uploaded_images/".basename($image);
    $target = "uploaded_images/".basename($image2);
    $target = "uploaded_images/".basename($image3);
    $target = "uploaded_images/".basename($image4);
    $target = "uploaded_images/".basename($image5);
    $target = "uploaded_images/".basename($image6);

    //$sql = "INSERT INTO ads (image) VALUES ('$image')";
    $sqlup = "UPDATE ads SET image='$image',image2='$image2',image3='$image3',image4='$image4',image5='$image5',image6='$image6' WHERE id='$id'";

   
    // execute query
    $mysqli->query($sqlup);
  

          if($sqlup){


          ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong >Success!</strong> Your data has been updated.
          </div>
<?php
}
  else{
?>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Failed!</strong> Error updating data, please try again.
          </div>
          <?php
        }
        }
        ?>


          <form method="POST"  enctype="multipart/form-data">

          <div class="form-group">
            <div class="form-row">
              <div>
                <label for="exampleInputName">ID</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" value="<?php echo $row['id'] ?>" name="id">
                <label for="exampleInputName">Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" value="<?php echo $row['name'] ?>" name="name">
                <label for="exampleInputLastName">Phone Number</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" value="<?php echo $row['phone'] ?>" name="phone">
              </div>
            </div>
          </div>
            <label for="exampleInputName">Location</label>
          <div class="form-group" >
            <select class="form-control col-sm-5"  name="location" onchange="getcities(this.value)">
                <option value="<?php echo $row['location'] ;?>"><?php echo $row['location'] ;?></option>
                <option value="1">Punjab</option>
                <option value="2">Sindh</option>
                <option value="3">KPK</option>
 
  </select>
              <br>
<div id="cityid"></div>
          </div>
            </div>
            
            <div class="card-header"><h4>Update the Ad Details</h4>
            </div>
          
          
                                                                                  <!-- Detail of the product-->
          
          
          <div class="card-body">
             <div>
                
                <label for="exampleInputName">Title</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" value="<?php echo $row['title'] ?>" name="title">
                
                <label for="exampleInputLastName">Category</label>
             <div class="form-group" >
        <select class="form-control col-sm-5" name="category" onchange="getcategory(this.value)">
                <option value="<?php echo $row['category'] ;?>"><?php echo $row['category'] ;?></option>
                <option value="1">Mobile     </option>
                <option value="2">Property      </option>
                <option value="3">vehicles        </option>
 
        </select>
               <br>
               <div id="id">
            </div>




                <label for="exampleInputName">Price (Rs.)</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" value="<?php echo $row['price'] ?>" name="price">
                 
                 <label for="exampleInputName">Ad Description</label>
                 <textarea class="form-control" aria-describedby="nameHelp" name="description" style="height:100px" cols="40" rows="4"><?php echo $row['description']; ?></textarea>
                 
                 
                 <label for="exampleInputName">Upload Photos</label><br>

                      
                      <input type="file" name="image">
                      <img src="uploaded_images/<?php echo $row['image'] ?>" style="width: 60px;height: 60px"><br><br>

                      
                      <input type="file" name="image2">
                      <img src="uploaded_images/<?php echo $row['image2'] ?>" style="width: 60px;height: 60px"><br><br>

                      
                      <input type="file" name="image3">
                      <img src="uploaded_images/<?php echo $row['image3'] ?>" style="width: 60px;height: 60px"><br><br>

                     
                      <input type="file" name="image4">
                      <img src="uploaded_images/<?php echo $row['image4'] ?>" style="width: 60px;height: 60px"><br><br>

                      
                      <input type="file" name="image5">
                      <img src="uploaded_images/<?php echo $row['image5'] ?>" style="width: 60px;height: 60px"><br><br>

                     
                      <input type="file" name="image6">
                      <img src="uploaded_images/<?php echo $row['imag6'] ?>" style="width: 60px;height: 60px"><br><br>

                      
                      
                   <!--  <li><image src="images/plus.png" height="80px" width="80px">  <input type="file" name="image2"></image></li>
                  <!--<li><input type="image" src="images/plus.png" height="80px" width="80px" > <input type="file" name="file2"> </li>
                  <li><input type="image" src="images/plus.png" height="80px" width="80px" > <input type="file" name="file3"> </li>
                  <li><input type="image" src="images/plus.png" height="80px" width="80px" > <input type="file" name="file4"> </li>-->
                 
                


            <!--     <table>
                     <tr>
                         <td>
                          <input type="image" src="images/plus.png" height="80px" width="80px" >
                          <input type="file" id="my_file" style="display: none;" /></td>
                         <td><input type="image" src="images/plus.png" height="80px" width="80px" ></td>
                         <td><input type="image" src="images/plus.png" height="80px" width="80px" ></td>
                     </tr>
                            
                     <tr>
                         <td><input type="image" src="images/plus.png" height="80px" width="80px" ></td>
                         <td><input type="image" src="images/plus.png" height="80px" width="80px" ></td>
                         <td><input type="image" src="images/plus.png" height="80px" width="80px" ></td>
                     </tr>
                 
                 </table>-->
                 
                 
                 
<!--upload video-->
                 
                 <br><br>
                 <label>Select a Video</label><br>
					<input name="UPLOAD_MAX_FILESIZE" value="41217515"  type="hidden"/>
					<input type="file" name="file" id="file" />
					

                 
                 
              </div>
              </div>

 <!--End of uploading video upload video-->         
                                                                                   <!-- Detail fo the product-->
          
       <button type="Submit" name="update" value="Update"  class="btn btn-primary">Update</button> 
       <a href="admin_php.php" class="btn btn-success" ><font color="white"> Back</font></a>
        </form>
        
        
                                                                                                   <!-- closing of form closing og form-->
        

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    
     <script>
    function getcities(countryID)
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST","cities.php?cid="+countryID,true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) 
            {
                document.getElementById("cityname").innerHTML = this.responseText;
            }
        }
       
    }
         
          function getcategory(countryID)
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST","category.php?cid="+countryID,true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) 
            {
                document.getElementById("catname").innerHTML = this.responseText;
            }
        }
       
    }
    </script>
</body>

</html>
