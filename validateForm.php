<?php

$firstName=$lastName=$email=$passid =$gender=$country_val=$zipCode="";
$flag=0;
if (empty($_POST['firstName'])) {
	 $nameErr = "missing first name" .  "<br>";
	 echo "$nameErr";
	 $flag=1;
   }
  else{
 	   $firstName = test_input($_POST['firstName'])  . "<br>";
     }

if(empty($_POST['lastName'])){
	echo $nameErr = "missing last name" .  "<br>";
	$flag=1;
 }
 else{
 	 $lastName = test_input($_POST['lastName']) . "<br>";
 }

if(empty($_POST['email'])){
	echo $emailErr= "missing email" .  "<br>";
	 $flag=1;
  }
  else{
 	 $email = test_input($_POST['email']) . "<br>";
  }

if(empty($_POST['passid'])){
	echo $passidErr= "missing password" .  "<br>";
	$flag=1;
  }
  else{
 	 $passid = test_input($_POST['passid']) . "<br>";
  }

if (!isset($_POST['gender'])) {
 	 echo $genderErr = "Must select one gender.." .  "<br>";
 	  $flag=1;
 }
  else
  {
  	  $gender = test_input($_POST['Gender']) . "<br>";
  	   $data[]= $gender;


  }

if (!isset($_POST['country'])) {
 	 echo $countryErr = "Must select one country.." .  "<br>";
 	   $flag=1;
  }
  else
  {
  	 $country = array('--Select country--', 'Australia','Canada','India','Russia','USA');
     echo  $country_val= test_input($country[$_POST['country']]) . "<br>";
      $data[]= $country_val;
  }
  if(empty($_POST['zipCode'])){
  	echo $zipErr = "Enter Zip Code" .  "<br>";
  	$flag=1;
  }
  else{
  	 $zipCode= test_input($_POST['zipCode']) . "<br>";

  }

 



 if (!eregi("^[A-Za-z]+$",$_POST['firstName'])) {
          echo "<br>"  .$errors[] = 'invalid  first name' . "<br>";
           $flag=1;
      } 
       else $data[] = $_POST['firstName'];
 if (!eregi("^[A-Za-z]+$",$_POST['lastName'])) {
          echo "<br>"  .$errors[] = 'invalid  last name' . "<br>";
          $flag=1;
      } 
        else $data[] = $_POST['lastName'];     


if (!eregi('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$',
     $_POST['email'])) {
          echo "<br>"  .$errors[] = ' invalid email address' . "<br>";
      $flag=1;
      }
      else $data[]=$_POST['email'];

if (!preg_match("/(?=.{10,})(?=.*[A-Z])(?=.*[a-z])(?=.*\d.)/", $passid)){
  	    echo "invalid Password... Password must contain one capital letter , one small letter , one number and one special charecter" . "<br>";
  	    $flag=1;
  }
   else{

   	 echo "Password Accepted.." . "<br>";
   }
  if($flag==0){
  	    echo "USER NAME :" .$$firstName ." " .$lastName . "<br>";
  	    echo "Email : " .$email. "<br>";
  	    echo "country : " . $country_val . "<br>";
  	     echo "Zip Code : " .$zipCode ."<br>";
  }
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_FILE["file"]["error"] > 0) {
     echo "Error : " . $_FILE["file"]["error"] . "<br>";
 }
else
  {
  	 echo "File type :" . $_FILES["file"]["type"];
     $allowedExts = array("gif", "jpeg", "jpg", "png");
     $temp = explode("/", $_FILES["file"]["name"]);
    if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
        || in_array($temp, $allowedExts)) {
    	    	        echo "Photo File Accepted...";	
    }
    	
    
     else
     {
            echo "Please Insert Profile Picture which is upto 2MB..!!!" . "<br>";
     }


 } 


 
 ?>
