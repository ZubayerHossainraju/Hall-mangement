

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sessionpractical");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "hamid_images/".basename($image);

  	$sql = "INSERT INTO hamid_images (image, Text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM hamid_images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 300px;
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
</style>
</head>
<body>

   <div id="menu">
              <ul>
              <li> <a href="hamid_show.php"><b>Main page</b></a></li>
          
          
        </ul>
        </div>
        
        
  <div>     
<div id="content">
  <!-- <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['Text']."</p>";
      echo "</div>";
    }
  ?> -->
  <form method="POST" action="hamid_notice.php" enctype="multipart/form-data">
    <h1>  <font size='4' color='red' align="right"><b> For Image Upload</b> </h1></font>
  	<input type="hidden" name="size" value="100000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Description of the Image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
<div id="upload">

 <h1>  <font size='4' color='red' align="right"><b> For File Upload</b> </h1></font>
  <form method="POST" action="hamid_upload.php" enctype="multipart/form-data" >
    <label>Document Name</label>
    <input type="text" name="doc_file">
    <input type="file" name="myfile">
    <input type="submit" name="submit" value="Upload">
  </form>

</div>



</body>