<!-- .............................................................. PHP Code ....................................................................... -->

<?php 
session_start();
$name = '';
$con = mysqli_connect('localhost', 'root', '', 'firstproject');

    
    $Email = isset($_GET['email']) ? $_GET['email'] : '';
    
    $des = "SELECT `Designation` FROM `empreg`";
    $qu = mysqli_query($con , $des);
    if(mysqli_num_rows($qu)>0){
        while($ro = mysqli_fetch_assoc($qu)){     
            $Designation = $ro['Designation'] ;
        }
    }
  
  $info = "select * from `class`";
  $query=mysqli_query($con,$info);
  if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){     
          $basicpay = $row['Basicpay'] ;
          $da =  $row['DA'] ;
          $hra =  $row['HRA'] ;
          $ta = $row['TA'];
          $med =  $row['MedicalAllowance'];
          $wa =  $row['WA'];
          $gra = $row['Gratuity'] ;
          $pf = $row['PF'] ;
          $md =  $row['MD'];
          $gpf =   $row['GPF'];
          $ldpd =  $row['LDPD'];
          
      }
      $add = $basicpay + $da + $hra + $ta + $med + $wa + $gra;
      $sub = $pf + $md + $gpf;
      $totalpay = $add - $sub;
      
      
      $leavedays = "SELECT * FROM `empreg` WHERE Email = '".$Email."' ";
      $qum=mysqli_query($con,$leavedays);
      if(mysqli_num_rows($qum)>0){
      while($r= mysqli_fetch_assoc($qum)){
            $leave=$r['Days'];           
      }
    }else{
        $leave = 0;
    }
      $finalPay = $totalpay-($leave * $ldpd); 
  }
 
  $coss = "select * from `empreg` where id = '".$_SESSION['empid']."' ";
  $result12 = mysqli_query($con , $coss);
  while($rep = mysqli_fetch_assoc($result12)){
    $name=$rep['Firstname'];
  }

?>

<!-- .............................................................. HTML Code ....................................................................... -->

<!DOCTYPE HTML>
<html>
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="Emp_salary.css">
      <title>Your Salary Report</title>
      <link rel="stylesheet" type="text/css" href="Emp_salary.css">
      <link rel="shortcut icon" type="image/png" href="37310000-af21-4ccf-ba43-d277d7ac4788.jpg">      
  </head>


  <body style="background: #20b7b3">
  <div style="height: 70px;
    width: 100px;
    top: 1.5%;
    left: 1%;
    position: absolute;">
    <img src="37310000-af21-4ccf-ba43-d277d7ac4788.jpg" style="height: 100%; width: 100%; border-radius: 10px">
    </div><br><br><br>
    <h1 style="position: absolute;
    font-size: 80px;
    left: 2%;
    top: 15%;
    color: black;">Salary Report</h1>
     <div style="position: absolute; right: 5%; top: 2% " ><img src="usdandyen2.gif" style="position: absolute; right: 5%; height: 230px; width: 450px; top:2%"></div>
      


    <br><br><br><br><br><br><br><br><br><br><div class="paul">
    <div class="container"><center>
      <div class="row" style="color: white">
      <div class="col-lg-12 col-md-12">
         <?php
                  $sql = "select * from class where Class_name = '".$Designation."'"; 
                  $cos = "select * from `empreg` where Email = '".$Email."' ";
                  $result1 = mysqli_query($con , $sql);
                  $result2 = mysqli_query($con , $cos);
        ?>
            <?php
            
            if(mysqli_num_rows($result1)>0){
                
              echo '<table >';
              echo "<thead>";
              echo "<tr>";   
             
              echo "<th>First Name</th>";?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>Basicpay</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>DA</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>HRA</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>TA</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>MED</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>WA</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>GRA</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>PF</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>MD</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>GPF</th>"; ?> &nbsp;&nbsp;&nbsp;<?php
              echo "<th>Final Pay</th>"; ?> &nbsp;&nbsp;<?php
              echo"<tbody>";
                 
               while($row = mysqli_fetch_assoc($result2)){
                  
                  $finalPay = $totalpay-($row['Days'] * $ldpd);
                   echo "<tr>";
                   echo "<td>" . $name . "</td>";
                   
                   echo "<td>" . $basicpay . "</td>";
                   echo "<td>" . $da . "</td>";
                   echo "<td>" . $hra . "</td>";          
                   echo "<td>" . $ta . "</td>";
                   echo "<td>" . $med . "</td>";
                   echo "<td>" . $wa . "</td>";
                   echo "<td>" . $gra . "</td>";
                   echo "<td>" . $pf . "</td>";
                   echo "<td>" . $md . "</td>";
                   echo "<td>" . $gpf . "</td>";
                   echo "<td>" . $finalPay . "</td>";

                   echo "</tr>";
               }
              echo "</tr>" ;   
              echo "<tr> 
              <td>$name</td>
              <td>$basicpay</td>
              <td>$da</td>
              <td>$hra</td>
              <td>$ta</td>
              <td>$med</td>
              <td>$wa</td>
              <td>$gra</td>
              <td>$pf</td>
              <td>$md</td>
              <td>$gpf</td>
              <td>$finalPay</td>
              </tr>";  
              echo "</thead>"; 
              echo"</tbody>"; 
              echo '</table>';
          }?>
          </div>
        </div></div></div></center>
       </body>
     

</html>
