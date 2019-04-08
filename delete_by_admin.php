<?php
				$id=$_GET['idx'];
				$mysqli=new mysqli("localhost","root","","webdev");
				if($mysqli->connect_errno){
					echo "Faild connect(".$mysqli->connect_errno.")".$mysqli->connect_errno;
				}
				$query=$mysqli->query("DELETE FROM `ads` WHERE id=$id");
				if($query){
					echo '<script language="javascript">';
						echo 'alert("Record Deleted")';
						echo '</script>';
						  echo "<script> window.location='admin_php.php'</script>";
						  
				}else
				{
				echo '<script language="javascript">';
				echo 'alert("Unsuccessful")';
				echo '</script>';
				  echo "<script> window.location='admin_php.php'</script>";
  

				}



?>