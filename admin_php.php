<?php

$conn=mysqli_connect("localhost","root","","webdev");


$start=0;
$limit=10;


$t=mysqli_query($conn,"select * from ads");
$total=mysqli_num_rows($t);



if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
	
}
else
{
	$id=1;
}
$page=ceil($total/$limit);

$query=mysqli_query($conn,"select * from ads limit $start,$limit");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png">

    <title>Update Ads</title>
    <link rel="stylesheet" href="css/3.3.7.bootstrap.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>

</head>
<body>
	

	<p><br/></p>
	<div class="container">

		<form class="form-inline mt-2 mt-md-0" style="float: right;" >
          <a href="Logout.php" class="btn btn-outline-primary my-2 mr-sm-3"><i class="fa fa-user">  </i>  Logout</a>
        </form>

		<h1>Update records</h1>
		<table class="table table-striped table-bordered table-hover" id="mydata">
			<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Phone</td>
					<td>Price</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tfoot>
						<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Phone</td>
					<td>Price</td>
					<td>Actions</td>
				</tr>
			</tfoot>
			<tbody>
				<?php

          	while($row=mysqli_fetch_array($query))
	        {?>
		
					<tr>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['phone'] ?></td>
						<td><?php echo $row['price'] ?></td>
						<td><a href="http://localhost/webs/update.php?idx=<?php echo $row['id']; ?>" class="btn btn-warning" >Edit</a>
							<a href="http://localhost/webs/delete_by_admin.php?idx=<?php echo $row['id']; ?>" class="btn btn-warning" >Delete</a>
						</td>
						
					</tr>
					<?php
			}
			?>
			</tbody>
		</table>
		<ul class="pagination">
	 <?php if($id > 1) {?> <li><a href="?id=<?php echo ($id-1) ?>">Previous</a></li><?php }?>
	 <?php
	 for($i=1;$i <= $page;$i++){
	 ?>
		<li><a href="?id=<?php echo $i ?>"><?php echo $i;?></a></li>
	  <?php
	 }
	  ?>
	<?php if($id!=$page)
	//3!=4
	{?> 
	  <li><a href="?id=<?php echo ($id+1); ?>">Next</a></li>
	<?php }?>
 </ul>

	</div>

</body>
</html>
