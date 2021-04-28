<?php
include "config2.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: changePassword.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: changePassword.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: changePassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $userID = $_SESSION['userID'];

        $sql = "SELECT userPassword
                FROM user WHERE 
                userID='$userID' AND userPassword='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE user
        	          SET userPassword='$np'
        	          WHERE userID='$userID'";
        	mysqli_query($conn, $sql_2);
        	header("Location: changePassword.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: changePassword.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: changePassword.php");
	exit();
}

