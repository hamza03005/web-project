<?php
$connection = mysqli_connect("localhost", "root", "","votingregistration");
// $db = mysqli_select_db($connection,'votingregistration');
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $Fname = $_POST['FName'];
  $dob = $_POST['dob'];
  $cnicno  = $_POST['cnic'];
  $gender = $_POST['gender'];
  $image=$_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];   
     
        move_uploaded_file($tempname,"images/$image");
//    $image = addslashes(file_get_contents($_FILES["image"]["temp_name"]));
    
  $query = "INSERT INTO voters(`name`, `Fname`, `date_of_birth`, `cnic`, `gender`, `image`)
   VALUES('$name','$Fname','$dob','$cnicno','$gender','$image')";
   $query_run = mysqli_query($connection,$query);

   if ($query)
   {
       echo "Inserted";
   }
   else
   {
       echo "Submittion Failled";
   }
}
?>
