
<?php 
$email = $_POST['email'];
$forget = $_POST['forget'];
$con = mysqli_connect('localhost' , 'root' , '' , 'firstproject');

if(isset($_POST['sub'])){
$info = "SELECT `ForgetPin` FROM `empreg` WHERE email = '$email'";
$query=mysqli_query($con,$info);
  if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
          $pin = $row['ForgetPin'] ;
      }

     if($forget == $pin){
        echo '<script type="text/javascript">window.location.href="createnew.html"</script>';
     }
     else{
        echo '<script type="text/javascript"> alert("Invalid credentials !");
        window.location.href="forget.html"</script>';
     } 
    }
}

?>





