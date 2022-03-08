<?php 
  $mysqli = new mysqli("localhost","root","","jobs");
  
 
  if(isset($_POST['submit'])=='submit'){
    $email = $_POST['email'];
    
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";
   
    $res = mysqli_query($mysqli, $sql);
   
    $data = mysqli_num_rows($res);

    $pass  = md5($_POST['password']);
   
    if($data >0){
      $message= 'Email already avilable';
      echo "<script type='text/javascript'>alert('$message');</script>";
    }else{

        $filename = $_FILES["resume"]["name"];
        $tempname = $_FILES["resume"]["tmp_name"]; 

      if (move_uploaded_file($tempname,"../uploads/".$filename)) {
        echo "hi";

        $data = $mysqli->query("INSERT INTO `users`(`name`, `email`, `mobile`,`dob`, `resume`,`password`) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['dob']."','". $filename."','". $pass."')");
      }
      $message= 'Registration Successfully';
      if($data){
        echo "<script type='text/javascript'>alert('$message');</script>";
      } 
    }
    
  }

?>