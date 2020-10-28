<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
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
    }
    #menu ul li a:hover{
      background:white;
    }
    h3{
      text-align: center;
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

form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
h2{
  text-align: center;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 90px;
    border-radius: 90px;
}

.container {
    padding: 16px;
}

span.password {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.password {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
     
}
</style>
</head>
<body>

<h2>Login for online hall application</h2>
<div id="menu">
              <ul>
              <li> <a href="hall.php"><b>Home</b></a></li>
           
          
          
        </ul>
        </div>
        
        
  <div>   

<form method="post" action="validation.php">
  <div class="imgcontainer">
    <img src="hall_image/man.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>
    <br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>


  </div>

  
   
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
    
     
     Facebook:&nbsp;&nbsp;<a href="https://www.facebook.com/zubayerhossain.com" target="_blank"><img src="img/facebook.png" height="35px"/> <a/> <br>
     Instagram:&nbsp;&nbsp;<a href="https://www.instagram.com/zubayerhossain/" target="_blank"><img src="img/instragram.png" height="35px"/> <a/> <br>
    
     </form>
         
    </div>
    
    
     
    <div id="date"> <h3> copyright &copy;<?php echo date("M"); ?> &nbsp;  <?php echo date("Y"); ?> &nbsp; <?php echo date("D"); ?> </h3> </div>
    
    </div>


</body>
</html>

