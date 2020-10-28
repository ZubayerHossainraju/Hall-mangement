
<?php 
  session_start();
  
  /*if( !$_SESSION['password']){
    header('location:admin.php?log=please enter username and password !!');
    
  }
*/
?>




<!doctype html>
<html>
<head>  


 <style>
        body{
      
      margin:0;
      padding:0;
      background:#E6E6FA;
    }

    #header{
        background:#008080;
      height:160px;
      margin-top:-15px;
    }
    
    #header h2{
      margin-left:150px;
      color:white;
      margin-top:15px;
      padding:10px;
      font-size:40px;float: left;
    
    }

    
    #header form{
      margin-left:800px;
      margin-top:20px;
      
    }
    #raju h1{
      text-align:center;
      color:red;col

    }
    
    #footer{
      height:300px;
      background:#008080;
      margin-top:1000px;
      
      
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
    
    .alert alert-success{
      background:red;
    }
    
    </style>

 </head>

<body>

  <?php if(isset($_GET['deleted'])){ ?>
     <div class="alert alert-success">   
   <strong>Success!</strong> successfully deleted   </div>
    
 <?php } ?>
  
  


<font size='4' color='red' align="right" =""> <?php echo @$_GET['updated']; ?> </font>


<div id="header">

 <h2> ADMIN PANEL</h2>
 

 <h1>  <a href="hamid_show.php"><font size='4' color='red' align="right"><b>Main admin page</b></a> </h1></font>
 

 <!-- <h3>  <a href="search.php"><font size='4' color='red' align="right" =""><b>Search data</b></a> </h3></font> -->

 

</div>
</header>



  <div id="raju">
    <h1><b>STUDENTS' PAYMENT LIST</b></h1>
  </div>
  <hr>

<table border="3" align="center" width="1000">


<tr align="center" bgcolor="yellow">
<th>Id</th>
<th>Name</th>
<th>Roll</th>
<th>Department</th>
<th>Account no</th>
<th>Heading of Account</th>
<th>Current year</th>
<th>Room number</th>
<th>Amount of taka</th>
<th>Date of submission</th>

</tr>

<tr >
<?php 

$conn=mysqli_connect('localhost','root','','sessionpractical');
//$cal=mysql_select_db('semester',$conn);

$ans="select * from hamid_payment  ;";
$run=mysqli_query($conn,$ans);
  $i=1;

while($row=mysqli_fetch_array($run)){
  $id=$row['Id'];
  $account=$row['1'];
  $heading=$row['2'];
  $name=$row['3'];
  $roll=$row['4'];
  $dept=$row['5'];
  $year=$row['6'];
  $room=$row['7'];
  $date=$row['9'];
  $amount=$row['8'];





?>



<td bgcolor="chocolate"> <?php echo $i;$i++; ?></td>
<td bgcolor="chocolate"><?php echo $name; ?></td>
<td bgcolor="chocolate"><?php echo $roll; ?></td>
<td bgcolor="chocolate"><?php echo $dept; ?></td>
<td bgcolor="chocolate"><?php echo $account; ?></td>
<td bgcolor="chocolate"><?php echo $heading; ?></td>
<td bgcolor="chocolate"><?php echo $year; ?></td>
<td bgcolor="chocolate"><?php echo $room; ?></td>
<td bgcolor="chocolate"><?php echo $date; ?></td>
<td bgcolor="chocolate"><?php echo $amount; ?></td>










</tr>

<?php } ?>

</table><br><br><br>


   


</body>

</html>