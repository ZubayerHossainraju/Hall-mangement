<!DOCTYPE html>
<html>
<head>
	<title>download image</title>
</head>
<body>

	<?php

	$con=mysqli_connect('localhost','root','','sessionpractical');
	
	$id=$_POST['id'];

	$query="select * from images where id='$id' ";

	$query1=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($query1)){

		$path=$row['image'];
		header('content-Disposition:attachment;filename='.$path.'');
		header('content-type:application/octent-stream');
		header('content-length='.filesize($path));
		readfile($path);
			
	}



	?>


</body>
</html>