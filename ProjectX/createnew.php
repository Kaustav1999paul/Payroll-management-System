<?php 
$email = $_POST['email'];
$pin = $_POST['pin'];
$password = $_POST['pass'];
$con = mysqli_connect('localhost' , 'root' , '' , 'firstproject');


if(isset($_POST['sub'])){
    $info = "SELECT `ForgetPin` FROM `empreg` WHERE email = '$email'";
    $query=mysqli_query($con,$info);
      if(mysqli_num_rows($query)>0){
          while($row = mysqli_fetch_assoc($query)){
              $dpin = $row['ForgetPin'] ;
          }
    
         if($dpin == $pin){
            
            $inf = "UPDATE `empreg` SET `Password`='$password' WHERE email = '$email' AND ForgetPin = $pin";
            $query_run = mysqli_query($con, $inf);
            
            //if condition
            
            if($query_run == TRUE){
               echo '<script type="text/javascript"> alert("Password Updated successfully!");
                 window.location.href="login.html"
                </script>';
            }
         }
         else{
            echo '<script type="text/javascript"> alert("Invalid credentials !");
            window.location.href="createnew.html"</script>';
         } 
        }
    }


?>



