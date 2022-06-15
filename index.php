<?php
 include("connection.php");
 
?>


<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>    
    <body>
        
        <form action="index.php" method="POST" enctype="multipart/form-data">
        <br>
        <h1>KPK Voting Form</h1>
        <br>
        <button><a href="display.php">See The Voters Drtails</a></button>
       <p> Name :  <input type="text" name="name"></p>
        
        <p>Father Name :<input type="text" name="FName"></p>
        
        <p>Date of Birth : <input type="Date" name="dob"></p>
        
        <p>CNIC No :<input type="number" name="cnic"></p>

        <p>Gender :<input type="text" name="gender"></p>
        
     <!-- <p>  Gender:
      <input type="radio" name="gender" id="male">
      <lable>Male</lable>
      <input type="radio" name="gender" id="female">
      <lable>Female</lable>
      <input type="radio" name="gender" id="transgender">
      <lable>Transgender</lable> -->
</p>
<br>
<p> Image :<input type="file" name="image"></p>
        <br>
        
            <p><button type="submit" value="Registration" class="btn" name="submit"> Submit</button></p>
    </form>
  
</body>
</html>





