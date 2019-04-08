<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>verify Phone No</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  
    <link href="css/new/search.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">


</script>


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
    
    <?php
	session_start();
  $ra=rand(1000,9999);
	$_SESSION['code']=$ra;
  $code=$_SESSION['code'];
	echo $code;
    

	?>
    
  
  <div class="container body col-md-4">
    <div class="card card-header mx-auto mt-5 form-container">
       
      <div class="card-header "><h2>Enter Phone number for verification</h2></div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          
       <form method="POST" action="mobile_uploaded_ads_submit.php" enctype="multipart/form-data">
          <div class="form-group">
            <input class="form-control" name="phone" class="verify__code"  autocomplete="off" autofocus="autofocus" placeholder="Enter Phone No"/>		
          </div>
		  <input type="submit" value="submit" name="verify" class="btn btn-primary">
          

        </form>
       
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>