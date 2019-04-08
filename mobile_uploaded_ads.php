<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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
  *{color: #fff;
  }
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
      <div class="card-header"><h4>Fill the Personal Detail</h4></div>
        
      <div class="card-body">
                                                                                                <!-- starting of form starting of form-->
          <form method="POST" action="upload.php"  enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div>
                <label for="exampleInputName">Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="name">
                <label for="exampleInputLastName">Phone Number</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="0300xxxxxxx" name="phone">
              </div>
            </div>
          </div>
            <label for="exampleInputName">Location</label>
          <div class="form-group" >
            <select class="form-control col-sm-5" name="location" onchange="getcities(this.value)">
               <option value="">Chose your Location</option>
                <option value="Punjab">Punjab</option>
                <option value="Sindh">Sindh</option>
                <option value="KPK">KPK</option>
 
  </select>
              <br>
<div id="cityid"></div>
          </div>
            </div>
            
            <div class="card-header"><h4>Fill the Ad Details</h4>
            </div>
          
          
                                                                                  <!-- Detail of the product-->
          
          
          <div class="card-body">
             <div>
                
                <label for="exampleInputName">Title</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Title of the product" name="title">
                
                <label for="exampleInputLastName">Category</label>
             <div class="form-group" >
        <select class="form-control col-sm-5" name="category" onchange="getcategory(this.value)">
                <option value="">Chose the category</option>
                <option value="Mobile">Mobile     </option>
                <option value="Property">Property      </option>
                <option value="vehicles">vehicles        </option>
 
        </select>
               <br>
               <div id="id">
            </div>




                <label for="exampleInputName">Price (Rs.)</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter less price for fast sell" name="price">
                 
                 <label for="exampleInputName">Ad Description</label>
                 <textarea class="form-control" aria-describedby="nameHelp" placeholder="include the brand,model and any other included accessories" name="description" style="height:100px" cols="40" rows="4"></textarea>
                 
                 
                 <label for="exampleInputName">Upload Photos</label><br>
                      <input type="file" name="image">
                      <input type="file" name="image2">
                      <input type="file" name="image3">
                      <input type="file" name="image4">
                      <input type="file" name="image5">
                      <input type="file" name="image6">
                 
                


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
          
       <input type="Submit" name="upload" value="Submit"  class="btn btn-primary btn-block">   
        </form>
        
        
                                                                                                   <!-- closing of form closing og form-->
        
        
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
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
                document.getElementById("cityid").innerHTML = this.responseText;
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
                document.getElementById("id").innerHTML = this.responseText;
            }
        }
       
    }
    </script>
</body>

</html>

