<?php 


$fname = $_POST['Firstname'];
$lname = $_POST['Lastname'];
$password = $_POST['Pass'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$birthday = $_POST['Birthday'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$pin = $_POST['Pincode'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];



$con = mysqli_connect('localhost', 'root', '', 'firstproject');

$query = "SELECT * FROM `adminreg` WHERE Email = '$email'";
$query_run = mysqli_query($con , $query);



if(mysqli_num_rows($query_run)>0){

    echo '<script type="text/javascript"> alert("User already exists!! Try another one");
     window.location.href="registration.html"
    </script>';
}

else
{
    $query = "INSERT INTO `adminreg`(`Firstname`, `Lastname`, `Password`, `Age`, `Gender`, `Birthday`, `Address`, `City`, `State`, `PinCode`, `Email`, `Mobile`) VALUES ('$fname','$lname','$password','$age','$gender','$birthday','$address','$city','$state','$pin','$email','$mobile')";

    $run = mysqli_query($con, $query);

 if($run == TRUE){
    echo '<script type="text/javascript"> alert("Registration Successful");
    window.location.href="login.html"
    
    </script>';
     
 }
 else
    echo '<script type="text/javascript"> alert("Something went wrong! Please try again");
     window.location.href="registration.html"
    </script>';
}


?>