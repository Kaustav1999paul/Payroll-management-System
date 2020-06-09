<!DOCTYPE HTML>
<html>
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Class Structure</title>
      <link rel="stylesheet" type="text/css" href="addclass.css">
    <link rel="shortcut icon" type="image/png" href="37310000-af21-4ccf-ba43-d277d7ac4788.jpg">      
  </head>

  <body>
      <h1 class="heading">Class Structure</h1>
      <img src="open-markets-banner-wide-2.gif" class="image1">
   <div class="logo">
    <img src="37310000-af21-4ccf-ba43-d277d7ac4788.jpg" style="height: 100%; width: 100%; border-radius: 10px">
    </div>
      
      
     <?php //             .............................................For Data Entry......................................................... ?> 
      
      
 <center>     
      
      <div>
      <form action="forentry.php" method="post">
<div class="form">
<br>
    
    <select name="classname" class="name" required>
    <option value="A">Class A</option>
    <option value="B">Class B</option>
    <option value="C">Class C</option>
    </select><br>
            
     <p class="bp1">Basic Pay</p>
            <input type="number" class="bpay" name="basicpay"  min="0" required>
    
     <p class="da1">DA</p>
            <input type="number" class="da"  name="DA"  min="0" required>
    
     <p class="hra1">HRA</p>
            <input type="number" class="hra"  name="HRA"  min="0" required>
    
     <p class="ta1">TA</p>
            <input type="number" class="ta"  name="TA"  min="0" required>
    
     <p class="ma1">Medical Allowance</p>
            <input type="number" class="ma"  name="Medical"  min="0" required>
    
     <p class="wa1">WA</p>
            <input type="number" class="wa"  name="WA"  min="0" required>
    
     <p class="gra1">Gratuity</p>
            <input type="number" class="gra"  name="Gratuity"  min="0" required>
    
     <p class="pf1">PF</p>
            <input type="number" class="pf"  name="PF"  min="0" required>
    
     <p class="it1">MD</p>
            <input type="number" class="it"  name="MD"  min="0" required>
     <p class="gpf1">GPF</p>
            <input type="number" class="gpf"  name="GPF"  min="0" required>
         
     <p class="ldpd">LDPD</p>
            <input type="number" class="ldpdinput"  name="LDPD"  min="0" required>
        
</div>
 

<div class="butt">
   <input type="submit" name="submit" value="Update">
 </div>
</form>
      
      
</div>
      
  </center>    
      
      
      
      
      
      
      
      
      
      
      
    
      
      
<?php //                     .............................................For Table........................................................ ?>   
      
      
      
      
      
      
      
      
      
      <div class="table">
      <?php   /*
          
          $con = mysqli_connect('localhost' , 'root' , '' , 'firstproject');
          $sql = "SELECT * FROM `class`;";
          $result = mysqli_query($con , $sql);
          
          if(mysqli_num_rows($result)>0){
              echo '<table class="table">';
              echo "<thead>";
              echo "<tr>";
                  
              echo "<th>Class Name</th>";
              echo "<th>Basic Pay</th>";
              echo "<th>DA</th>";
              echo "<th>HRA</th>";
              echo "<th>TA</th>";
              echo "<th>Medical Allowance</th>";
              echo "<th>WA</th>";
              echo "<th>Gratuity</th>";
              echo "<th>PF</th>";
              echo "<th>MD</th>";
              echo "<th>GPF</th>";
              
              echo"<tbody>";
               while($row = mysqli_fetch_assoc($result)){
                   echo "<tr>";
                   echo "<td>" . $row["Class_name"] . "</td>";
                   echo "<td>" . $row["Basicpay"] . "</td>";
                   echo "<td>" . $row["DA"] . "</td>";
                   echo "<td>" . $row["HRA"] . "</td>";
                   echo "<td>" . $row["TA"] . "</td>";
                   echo "<td>" . $row["MedicalAllowance"] . "</td>";
                   echo "<td>" . $row["WA"] . "</td>";
                   echo "<td>" . $row["Gratuity"] . "</td>";
                   echo "<td>" . $row["PF"] . "</td>";
                   echo "<td>" . $row["MD"] . "</td>"; 
                   echo "<td>" . $row["GPF"] . "</td>";
                   echo "</tr>";
               }
              echo "</tr>" ;     
              echo "</thead>"; 
              echo"</tbody>"; 
              echo '</table>';
          }
                   
          
         */ ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </div>
  </body>
</html>

