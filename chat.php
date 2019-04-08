<?php
$host    = "localhost";
$pass    = "";
$user    = "root";
$db_name = "webdev";
$conn    = new mysqli($host, $user, $pass, $db_name);
$query = "SELECT * FROM chat ORDER BY id DESC";
$run   = $conn->query($query);
while ($row = $run->fetch_array()):
?>
<div id="chat_data">
	
				<span style="color:green;"><?php echo $row['name'];
?>:</span>
				<span style="color:red;"><?php echo $row['msg'];
?></span>
				<span style="float:right;"><?php echo $row['date'];
?></span>


			</div>
<?php endwhile;?>