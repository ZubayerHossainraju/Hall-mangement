<?php


$connect=mysqli_connect('localhost','root','','sessionpractical');

    $value=$_GET['del'];
	
	$delete="delete from student where Id='$value';";
	
	
	
   if(mysqli_query($connect,$delete)){
	   
	   echo "<script>window.open('view.php?deleted=1','_self')</script>";
	   header('location:show.php');
   }
   
   else {
	   echo "<script>window.open('view.php?not_deleted=','_self')</script>";
   }
   
?>





