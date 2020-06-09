<?php 


$class = $_POST['classname'];
$basicpay = $_POST['basicpay'];
$da = $_POST['DA'];
$hra = $_POST['HRA'];
$ta = $_POST['TA'];
$med = $_POST['Medical'];
$wa = $_POST['WA'];
$gra = $_POST['Gratuity'];
$pf = $_POST['PF'];
$md = $_POST['MD'];
$gpf = $_POST['GPF'];
$ldpd = $_POST['LDPD'];



$con = mysqli_connect('localhost', 'root', '', 'firstproject');


 $query = "INSERT INTO `class`(`Class_name`, `Basicpay`, `DA`, `HRA`, `TA`, `MedicalAllowance`, `WA`, `Gratuity`, `PF`, `MD`, `GPF`, `LDPD`) VALUES ('$class','$basicpay','$da','$hra','$ta','$med','$wa','$gra','$pf','$md','$gpf', '$ldpd')";

    $run = mysqli_query($con, $query);

 if($run == TRUE){
    echo '<script type="text/javascript"> alert("Class Added Successful");
    window.location.href="addclass.php"
    
    </script>';
     
 }
 else
    echo '<script type="text/javascript"> alert("Something went wrong! Please try again");
     window.location.href="logged_in.html"
    </script>';

?>

















