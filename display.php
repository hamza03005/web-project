
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="table_style.css">
</head>
<body>
      <button><a href="index.php">Go to Form Page</a></button>
 <div class="main-div"> </div>
      <div class="center-div">
          <div class="table-responsive">
              <table>
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>F-Name</th>
                          <th>DoB</th>
                          <th>CNIC</th>
                          <th>Gender</th>
                          <th>Images</th>
                         
                      </tr>
                  </theat>
                  <tbody>
                  <?php
                 include("connection.php");

                  $selectquery= "select * from voters";

                  $query=mysqli_query($connection,$selectquery);

                  $nums=mysqli_num_rows($query);

  
                  while($result=mysqli_fetch_array($query)){
                    ?>


                  <tr>
                  <td><?php echo $result['name'] ?></td>
                  <td><?php echo $result['Fname'] ?></td>
                  <td><?php echo $result['date_of_birth'] ?></td>
                  <td><?php echo $result['cnic'] ?></td>
                  <td><?php echo $result['gender'] ?></td>
                  <td><?php  $result['image'] ?></td>
                
              </tr>
              <?php
                  }
              ?>


                     
                  </tbody>
</table>
</div>
      </div>
</body>
</html>


