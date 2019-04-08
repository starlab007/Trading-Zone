<?php
$host    = "localhost";
$pass    = "";
$user    = "root";
$db_name = "webdev";
$conn    = new mysqli($host, $user, $pass, $db_name);
?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png">

    <title>TradingZone chat_box</title>
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/new/chat_styles.css">
	<link href="css/new/search.css" rel="stylesheet">
	<script type="text/javascript">
		function ajax(){
		var req=new XMLHttpRequest();
		req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
		document.getElementById('chat').innerHTML=req.responseText;

	}

	}
	req.open('GET','chat.php',true);
	req.send();


	}
	setInterval(function(){ajax()},1000);

	</script>
</head>
<body onload="ajax()">
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
             
          <a href="posting.html" class="btn btn-outline-primary my-2 my-sm-0"> Submit an Ad</a>
            
          
          </form>

      </nav>
    </header>

    <!--End of header End of header-->
	<p>
	<div id="container">
	<div id="chat_box">
		<div id="chat">
		</div>

	</div>
		<form method="post" action="chat_index.php">
			<input type="text" name="name" placeholder="Enter name">
			<textarea name="msg" placeholder="Enter the meassage:)"></textarea>
			<input type="submit" name="submit" value="Send">

		</form>
<?php
if (isset($_POST['submit'])) {
	$name  = $_POST['name'];
	$msg   = $_POST['msg'];
	$date=date('Y/m/d h:i:sa');
	$query = "INSERT INTO chat (name,msg,date) values ('$name','$msg','$date')";
	$run   = $conn->query($query);
	

}
?>
</div>
</p>
</body>
</html>
