<!DOCTYPE HTML>
<html>
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Employee Report</title>
      <link rel="stylesheet" type="text/css" href="emp_report.css">
    <link rel="shortcut icon" type="image/png" href="37310000-af21-4ccf-ba43-d277d7ac4788.jpg">      
  </head>

  <body>
      <h1 class="heading">Employee Report</h1>
      <img src="earnest-loading-icons2.gif" class="image1">
   
      
      <div class="table">
      <?php 
          
          $con = mysqli_connect('localhost' , 'root' , '' , 'firstproject');
          $sql = "SELECT * FROM `empreg`;";
          $result = mysqli_query($con , $sql);
          
          if(mysqli_num_rows($result)>0){
              echo '<table class="table">';
              echo "<thead>";
              echo "<tr>";
                  
              echo "<th>First Name</th>";
              echo "<th>Last Name</th>";
              echo "<th>Emp ID</th>";
              echo "<th>Email</th>";
              echo "<th>Days</th>";
              
              
              echo"<tbody>";
               while($row = mysqli_fetch_assoc($result)){
                   echo "<tr>";
                   echo "<td>" . $row["Firstname"] . "</td>";
                   echo "<td>" . $row["Lastname"] . "</td>";
                   echo "<td>" . $row["Empid"] . "</td>";
                   echo "<td>" . $row["Email"] . "</td>";
                   echo "<td>" . $row["Days"] . "</td>";    
                   echo "</tr>";
               }
              echo "</tr>" ;     
              echo "</thead>"; 
              echo"</tbody>"; 
              echo '</table>';
          }
          
          else{ 
              echo '<script type="text/javascript"> alert("No Record found")</script>'; 
          }          
          
          ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </div>
  </body>
</html>
