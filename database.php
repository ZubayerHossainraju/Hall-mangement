

<?php
    
    $conn=mysqli_connect("localhost","root","","sessionpractical");
    
    if(isset($_POST['submit']))
      
    {
      $name = ($_POST['name']);
    $email = ($_POST['email']);
    $tele=($_POST['telephone']);
    
    
    $department=($_POST['department']);
    $roll=($_POST['roll']);
    $current_edu_yar=($_POST['current']);
    $result=($_POST['result']);
   
    $date_of_birth=($_POST['date']);

    $religion=($_POST['religion']);
   
   
    $father_name=($_POST['Father']);
    $father_income=($_POST['father2']);
    $father_occupation=($_POST['father1']);


    $address=($_POST['address']);

    $hall_choice=($_POST['hall_choice']);
    $bank_receipt=($_POST['bank']);
  
    $details_roomate=($_POST['roomate']);

    if($hall_choice=='Shahid President Ziaur Rahman Hall'){

      $zia="insert into zia (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$zia)){
     echo "Data are successfully inserted";
   }

    }
// for hamid hall
    if($hall_choice=='Shahid Abdul Hamid Hall'){

      $hamid="insert into hamid (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$hamid)){
     echo "Data are successfully inserted";
   }

    }

    // for Tinshed hall
if($hall_choice=='Tinshed hall'){

      $tin="insert into tin (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$tin)){
     echo "Data are successfully inserted";
   }

    }




   if($hall_choice=='Shahid Shahidul Islam Hall'){

      $Shahidul="insert into shahidul (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$Shahidul)){
     echo "Data are successfully inserted";
   }

    }


    // for Mujibur
    if($hall_choice=='Bangabandhu Sheikh Mujibur Rahman Hall'){

      $mujib="insert into mujibur (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$mujib)){
     echo "Data are successfully inserted";
   }

    }

//for selim hall

    if($hall_choice=='Shahid Lt Selina Hall'){

      $selim="insert into selim (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$selim)){
     echo "Data are successfully inserted";
   }

    }


// for Hasina hall
    if($hall_choice=='Deshratna Sheikh Hasina Hall'){

      $hasina="insert into hasina (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$hasina)){
     echo "Data are successfully inserted";
   }

    }






    else{

   $ans="insert into student (Id,name,email,telephone,department,roll,current_edu_year,result,address,date_of_birth,father_name,father_occupation,father_income,hall_choice,roomates,bank_recepit) values('','$name', '$email', '$tele','$department','$roll','$current_edu_yar','$result','$address','$date_of_birth','$father_name','$father_occupation','$father_income','$hall_choice','$details_roomate','$bank_receipt');";
  if( mysqli_query($conn,$ans)){
     echo "Data are successfully inserted";
   }
   
    }
    
  }
 ?>


