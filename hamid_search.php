<!doctype html>
<html>
<head>
<link href="search_action.css" rel="stylesheet" />
 <style>
       body{
			
			margin:0;
			padding:0;
			margin-left:5px;
			background:#DAF7A6;
		}
		
		
		
		#header p{
			float:right;
			
			margin-top:-190px;
			margin-right:50px;
            color:chocolate;		
			font-size:20px;
			
		}
		
		
		
		</style>

</head>

<body>

<div id="header">


 
 <p> <a href="login.php">Login</a>  </p>
 
 
 
  
 

</div>
</header>


  <div >
              
			        <li> <a href="hall.php">Home</a></li> 
					
					<li> <a href="hamid_show.php">Student Database</a></li>
					
			  
			  </div>
			  
			  
	<div>		  
			  
<?php
$conn=mysqli_connect('localhost','root','','sessionpractical');

     if(isset($_GET['search'])){
		 
		$search_value=$_GET['search'];
		
		$select_query="select * from hamid where roll='$search_value' OR name='$search_value' OR father_name='$search_value' OR address='$search_value' OR hall_choice='$search_value' OR department='$search_value' OR 
		current_edu_year='$search_value' ;";
		$select_call=mysqli_query($conn,$select_query);
		
		while($row1=mysqli_fetch_array($select_call)){
			$search_idd=$row1['Id'];
			$search_roll=$row1[5];
			$search_name=$row1[1];
			$search_dep=$row1[4];
			$search_father=$row1[10];
			$search_address=$row1[8];
			$search_series=$row1[6];
			$search_hall=$row1[13];
		
			
?>
			
          
		<table border="1" align="center" width="500">
							
			<tr  bgcolor="chocolate">
			
			<td colspan='4' width='100'> <?php echo $search_roll; ?> </td>
			<td  colspan='4' width='100'>  <?php echo $search_name; ?> </td>
			<td  colspan='4' width='100'>  <?php echo $search_father; ?> </td>
			<td  colspan='4' width='100'> <?php echo $search_address; ?> </td>
			<td  colspan='4' width='100'><?php echo $search_series; ?> </td>
			<td  colspan='4' width='100'><?php echo $search_dep; ?> </td>
			<td  colspan='4' width='100'><?php echo $search_hall; ?> </td>
			
			
			</tr>
			
			</table>
			
			<?php } } ?>
			</div>
			
			
			
			
			
			
			
	
         


</body>

</html>
