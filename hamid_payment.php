<!doctype html>
<html>
<head>  


<link href="contact.css" rel="stylesheet" />
 <style>
       body{
      
      margin:0;
      padding:0;
      margin-left:5px;
      background:#DAF7A6;
    }
    
    #header{
        background:#008080;
      height:200px;
      margin-top:-15px;
    }
    #header img{
      margin-top:15px;
      margin-left:300px;
    }
    
    #header h2{
      margin-left:0px;
      color:white;
      margin-top:35px;
      padding:10px;
      font-size:40px;
      background:#900C3F;
      display:block;
    
    }
    #header h2:hover{
      background:black;
      color:white;
      text-align: center;
    }
    
    #header p{
      float:right;
      
      margin-top:-190px;
      margin-right:50px;
            color:chocolate;    
      font-size:20px;
      
    }
    #header form{
      margin-left:800px;
      margin-top:20px;
      
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
    }
    #menu ul li a:hover{
      background:white;
    }
    
    #footer{
      height:300px;
      
      margin-top:300px;
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
<title> Want to contact? </title>

 </head>

<body>


<div id="header">

 <h2> Hall Management</h2>
 
 
  <p>  <a href="user_logout.php">Logout</a> </p>
 
 
 
 
 
  
 

</div>
</header>


  <div id="menu">
              <ul>
              <li> <a href="hamid_student.php"><b>Main page</b></a></li>
          
          
        </ul>
        </div>
        
        
  <div>     
        




<form action="hamid_payment.php" method="POST">

<table border="3" align="center" width="500"  >

<tr> 
<th bgcolor="yellow"  colspan="5"><b>Hall rent form  </b></th>
</tr>

<tr>
<td align="right">Account no:</td>
<td> <textarea type="text" name="account" cols="45" required></textarea> </td>
</tr>
<tr>
<td align="right"> Heading of Account:</td>
<td> <textarea type="text" name="heading" cols="45" required></textarea> </td>
</tr>

<tr>
<td align="right"> Enter Your Name:</td>
<td> <textarea type="text" name="name" cols="45" required></textarea> </td>
</tr>




<tr>
<td align="right">Roll:</td>
<td> <textarea type="text" name="roll" cols="45" required></textarea> </td>
</tr>


<tr>
<td align="right">department:</td>
<td> <textarea  name="department" rows="2" cols="45" required> </textarea> </td>
</tr>

<tr>
<td align="right">session:</td>
<td> <textarea  name="session" rows="2" cols="45" required> </textarea> </td>
</tr>
<tr>
<td align="right">year:</td>
<td> <textarea  name="year" rows="2" cols="45" required> </textarea> </td>
</tr>
<tr>
<td align="right">Room no:</td>
<td> <textarea  name="room" rows="2" cols="45" required> </textarea> </td>
</tr>
<tr>
<td align="right">date of submission:</td>
<td> <textarea  name="date" rows="2" cols="45" required> </textarea> </td>
</tr>

<tr>
<td align="right">Amount of taka:</td>
<td> <textarea  name="amount" rows="2" cols="45" required> </textarea> </td>
</tr>



<td align="center" colspan="5"> 
  <input type="submit" name="submit" value="Submit" >
 

<tr>



</tr>




</table>

//<font color="green" size="3" align="center"> <?php echo @$_GET['inserted']; ?> </font>
</form>


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
    
     
     Facebook:&nbsp;&nbsp;<a href="https://www.facebook.com/zubayerhossain46.com" target="_blank"><img src="img/facebook.png" height="35px"/> <a/> <br>
     Instagram:&nbsp;&nbsp;<a href="https://www.instagram.com/zubayerhossain/" target="_blank"><img src="img/instragram.png" height="35px"/> <a/> <br>
    
     </form>
         
    </div>
    
    
     
    <div id="date"> <h3> copyright &copy;<?php echo date("M"); ?> &nbsp;  <?php echo date("Y"); ?> &nbsp; <?php echo date("D"); ?> </h3> </div>
    
    </div>
    
     
 

</body>

</html>

<?php 

$conn=mysqli_connect("localhost","root","","sessionpractical");
//$ans=mysql_select_db('semester',$conn);




if(isset($_REQUEST['submit'])){
  
  $account=$_POST['account'];
  $heading=$_POST['heading'];
  $name=$_POST['name'];
  $roll=$_POST['roll'];
  $dept=$_POST['department'];
  $year=$_POST['year'];
  $room=$_POST['room'];
  $date=$_POST['date'];
  $amount=$_POST['amount'];
  
  $insert="insert into hamid_payment(Account,Heading,name,roll,dept,year,room,date,amount)
  values('$account','$heading','$name','$roll','$dept','$year','$room','$date','$amount');";
  
  if(mysqli_query($conn,$insert)){
    echo "<script>window.open('hamid_payment.php?inserted=RECORD HAS BEEN INSERTED SUCCESSFULLY','_self')</script>";
    
  }
  


}
  
  

?>