<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' , 'firstproject');
$sql = "SELECT * FROM `empreg` WHERE id = '".$_SESSION['empid']."' ;";
$result = mysqli_query($con , $sql);

$Start = $_POST['start'];
$End = $_POST['end'];
$Num = $_POST['num'];
$Reason = $_POST['reason'];
$email = $_POST['email'];





$query = "UPDATE `empreg` SET `From`='$Start',`To`= '$End',`Days`= '$Num',`Reason`= '$Reason' WHERE id = '".$_SESSION['empid']."' ;";
$query_run = mysqli_query($con, $query);

//if condition

if($query_run == TRUE){
   echo '<script type="text/javascript"> alert("Submitted successfully!");
     window.location.href="emp_loggedin.html"
    </script>';
}

else{
    echo '<script type="text/javascript"> alert("Submitssion Error!");
     window.location.href="leave.html"
    </script>';
}


?>