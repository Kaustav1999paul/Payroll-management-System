<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$con = mysqli_connect('localhost' , 'root' , '' , 'firstproject');




      /*               For Employee                  */


if(isset($_POST['submit2'])){

$query = "SELECT * FROM `empreg` WHERE email = '$email' AND password = '$password' "; 

$query_run = mysqli_query($con , $query);



if(mysqli_num_rows($query_run)== TRUE){
    
    while($row=mysqli_fetch_assoc($query_run)){
        $_SESSION['empid']=$row['id'];
    }
    $_SESSION['email'] = $email;
    echo '<script type="text/javascript">alert("Login successful!");
    window.location.href = "emp_loggedin.html";
    </script>';
}

else{
     echo '<script type="text/javascript">alert("Invalid Credentials!");
    window.location.href = "login.html";
    </script>';
}
}



/**************************************************************************************************************************************/
/**************************************************************************************************************************************/
/**************************************************************************************************************************************/
/**************************************************************************************************************************************/



    /*               For Admin                */


if(isset($_POST['submit1'])){

$query = "SELECT * FROM `adminreg` WHERE email = '$email' AND password = '$password' "; 

$query_run = mysqli_query($con , $query);



if(mysqli_num_rows($query_run) == TRUE){
    
    $_SESSION['email'] = $email;
    echo '<script type="text/javascript">alert("Login successful!");
    window.location.href = "logged_in.html";
    </script>';
}

else{
     echo '<script type="text/javascript">alert("Invalid Credentials!");
    window.location.href = "login.html";
    </script>';
}
}




?>