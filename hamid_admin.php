<?php 
  session_start();
  
  

?>





<!doctype html>
<html>
<head>  

<style>

      body{
		  background#f5f5f0;
	  }
	  #menu{
      background:#2F4F4F;
      height:40px;
      margin-top:-16px;
      border-bottom:2px solid green;
    }
    #menu ul{
      
      list-style-type:none;
      margin-left:50px;
      
      
    }
    
    #menu ul li{
      float:left;
      border-right:1px solid black;
      
      
    }
    #menu ul li:last-child{
      border:none;
    }
    
    #menu ul li a{
      text-decoration:none;
      padding:10px 20px;
      display:block;
      color:red;
      font-size:25px;
      padding-bottom: 5px;
    }
    #menu ul li a:hover{
      background:white;

    }
	  #footer{
      height:200px;
      padding:10px;
      margin-top:500px;
      background:#900C3F;
      
      
    }
    #footer:hover{
      background:black;
      color:green;
    }
    #footer td{
      margin-left:100px;
    }
    
    #contact{ 
         float:left;
       width:400px;
    }
    
    #contact h2{
      border-bottom:1px solid black;
    }
    
    #social{
       float:left;
       width:400px;
    }
    
    #social h2{
      border-bottom:1px solid black;
    }
    #About{
       float:left;
       width:400px;
    }
    
    #About h2{
      border-bottom:1px solid black;
    }
    #About p{
      background:white;
      padding:15px;
    }
    #date h3{
      float:left;
      padding:15px;
      margin-bottom:10px;
    }

</style>
</head>

<body>


<div id="menu">
              <ul>
              <li> <a href="hall.php"><b>Home</b></a></li>
          
          
        </ul>
        </div>
        
        
  <div>   

<form action="" method="POST">

<table border="3" align="center" width="500" bgcolor='blue' >

<tr> 
<th bgcolor="yellow"  colspan="5"> ADMIN Login form </th>
</tr>


<tr>
<td align="right" bgcolor="orange">Name:</td>
<td> <input type="name" name="name" required> </td>
</tr>


<tr>
<td align="right" bgcolor="orange" >Password:</td>
<td> <input type="password" name="password"  required> </td>
</tr>


<td align="right" colspan="6"> 
  <input type="submit" name="submit" value="Submit" ></td>

<tr>

</table>

</form>

<center><font color="red" size="3" align="center"><b> <?php echo @$_GET['log']; ?>  </b> </font> </center>

<div id="footer">
         <div id="contact"> 
     <h2>Contact Us</h2>
     <form>
    
     Mailing Address:<input type="submit" value="pointbreak998@gmail.com" size="20" required /> <br>
     Mobile:    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;   <input type="submit" value="01757967689" size="20" required /><br>
     Address:  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; <input type="submit" value="RUET,Rajshahi" size="20" required /> <br>
     </form>
       
    </div>
    
    
    
     <div id="social"> <h2>Social Links</h2>
     <form>
    
     
     Facebook:&nbsp;&nbsp;<a href="https://www.facebook.com/zubayerhossain.com" target="_blank"><img src="img/facebook.png" height="35px"/> <a/> <br>
     Instagram:&nbsp;&nbsp;<a href="https://www.instagram.com/zubayerhossain/" target="_blank"><img src="img/instragram.png" height="35px"/> <a/> <br>
    
     </form>
         
    </div>
    
    
     
    <div id="date"> <h3> copyright &copy;<?php echo date("M"); ?> &nbsp;  <?php echo date("Y"); ?> &nbsp; <?php echo date("D"); ?> </h3> </div>
    
    </div>


</body>

</html>

 

<?php 


$conn=mysqli_connect("localhost","root","","sessionpractical");

	if(isset($_POST['submit'])){
		
		
	$u_name = $_POST['name'];
	$u_password=$_SESSION['hamid']=($_POST['password']);
	

	$result=("
	select name,password 
	from signin 
	where name='$u_name' 
	and password='$u_password' 
	") or die('fail');
	
	$ans=mysqli_query($conn,$result);
	
	if( mysqli_num_rows($ans)>0){
		header ('location:hamid_show.php');
	}
	
	 
	 if( mysqli_num_rows($ans)==0)  {
	echo "<script>alert('incorrect username or password')</script>";
	}
	
	
	
	}
	
	


?>

