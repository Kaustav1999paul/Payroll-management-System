<?php 

$fname = $_POST['Firstname'];
$lname = $_POST['Lastname'];
$empid = $_POST['Emp_id'];
$password = $_POST['Pass'];
$gender = $_POST['Gender'];
$age = $_POST['Age'];
$birthday = $_POST['Birthday'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$pin = $_POST['Pincode'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];
$degree = $_POST['Degree'];
$designation = $_POST['Designation'];
$department = $_POST['Department'];
$forget = $_POST['Security'];

$con = mysqli_connect('localhost', 'root', '', 'firstproject');

$query = "SELECT * FROM `empreg` WHERE Email = '$email'";
$query_run = mysqli_query($con , $query);


if(mysqli_num_rows($query_run)== TRUE){

    echo '<script type="text/javascript"> alert("User already exists!! Try another one");
     window.location.href="registration.html"
    </script>';
}

else
{
    $query = " INSERT INTO `empreg`(`Firstname`, `Lastname`, `Empid`, `Password`, `Gender`,`Age`, `Birthday`, `Address`, `City`, `State`, `PinCode`, `Email`, `Mobile`, `Degree`, `Designation`, `Department`, `ForgetPin`) VALUES ('$fname','$lname', '$empid' ,'$password' ,'$gender' ,'$age' ,'$birthday' ,'$address' ,'$city' ,'$state', '$pin' ,'$email', '$mobile', '$degree', '$designation', '$department', '$forget')";

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




