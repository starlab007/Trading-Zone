<?php
  // Create database connection
  $conn=new mysqli("localhost", "root", "", "webdev");


$name=$_POST['name'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$city=$_POST['city'];
$title=$_POST['title'];
$category=$_POST['category'];
$price=$_POST['price'];
$description=$_POST['description'];
date_default_timezone_set("Asia/Karachi");
$date=date("Y-m-d h:i:sa");
  // Initialize message variable
   $sql="INSERT INTO ads (name,phone,location,city,title,category,price,description,ad_date) VALUES ('$name','$phone','$location','$city','$title','$category','$price','$description','$date')";
   $conn->query($sql);
    $lastid = $conn->insert_id;
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
    $image2= $_FILES['image2']['name'];
    $image3= $_FILES['image3']['name'];
    $image4= $_FILES['image4']['name'];
    $image5= $_FILES['image5']['name'];
    $image6= $_FILES['image6']['name'];

  	// image file directory
  	$target = "uploaded_images/".basename($image);

  	//$sql = "INSERT INTO ads (image) VALUES ('$image')";
    $sqlup = "UPDATE ads SET image='$image',image2='$image2',image3='$image3',image4='$image4',image5='$image5',image6='$image6' WHERE id='$lastid'";

   
  	// execute query
    $conn->query($sqlup);
    $nextid = $conn->insert_id;

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		
      echo "<script>window.location='posting.html'</script>";
  	}else{
  		echo "Images is not uploaded";
      echo "<script>window.location='posting.html'</script>";
  	}
  }

//video uploading video uploading

if(isset($_FILES['file'])){
							
								$name = $_FILES['file']['name'];
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['file']['type'];
								$size = $_FILES['file']['size'] /1024/1024;
								$random_name = rand();
								$tmp = $_FILES['file']['tmp_name'];
								
								
        if ((strtolower($type) != "video/mpg") && (strtolower($type) != "video/wma") && (strtolower($type) != "video/mov") 
								&& (strtolower($type) != "video/flv") && (strtolower($type) != "video/mp4") && (strtolower($type) != "video/avi") 
				                && (strtolower($type) != "video/3gp") && (strtolower($type) != "video/wmv") && (strtolower($type) != "video/wmv"))
								{
									$message= "Video Format Not Supported !";

								}else
								{
									move_uploaded_file($tmp, 'uploaded_videos/'.$random_name.'.'.$extension);
                  
        
                   $sql="UPDATE ads SET video_title='$name',video_location='$random_name.$extension' WHERE id='$lastid'";
									$conn->query($sql);
									$message="Video Uploaded Successfully!";

								}
}

  ?>