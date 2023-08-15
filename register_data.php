<?php

require_once('inc/db.php');
if(isset($_POST["register"]))
{
  
                        $view_arts_query="select * from customers";
                        $run=mysqli_query($db,$view_arts_query);

                        while($row=mysqli_fetch_array($run)) {

                            
                            $email=$row['email'];
                            $user_email=$email;
                        }

      $fname=$_POST['fname'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      // $address=$_POST['address'];
      // $country=$_POST['country'];
      // $state=$_POST['state'];
      // $city=$_POST['city'];
      // $pincode=$_POST['pincode'];
      $password=$_POST['password'];

      if($user_email == $email){

      $message = "This Email ID Already Exists in Our System, please try Another Email.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('register.php','_self');</script>";
}

else{

$sql = "INSERT INTO customers (`fname`,`email`,`mobile`,`password`) VALUES
('$fname','$email','$mobile','$password')";

if ($db->query($sql) === TRUE) {
        $subject = "Response From Major Fertilizers";
        $message1 = "Thank you for the Registration With us";
        $headers = "From: manoj@ycstech.in";
        mail($email,$subject,$message1,$headers);

        $message = "Registration Completed, redirecting to login page";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.open('login.php','_self');</script>";

} else {
    echo "Error updating record: " . $db->error;
}
}
}

$db->close();
?>