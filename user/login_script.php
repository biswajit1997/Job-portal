<?php 
 include '../db.php';
  
 
  if(isset($_POST['submit'])=='submit'){
    $email = $_POST['email'];
    $pass  = md5($_POST['password']);
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' && `password` = '$pass'  ";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

    if($result->num_rows > 0){
        $message= 'Login Successfully';
        // Set session variables
      
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
$_SESSION["role"] = $row['role'];
// $_SESSION["favanimal"] = "cat";
        echo '<script>window.location="../dashboard"</script>';	
    }else{ 
      $message= 'login faild';
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo '<script>window.location="index.html"</script>';	
    }
    
  }

?>