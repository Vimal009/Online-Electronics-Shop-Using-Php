<?php  
   $email=$_POST['email'];
   $password=$_POST['password'];

   $conn = mysqli_connect('localhost','root',"",'online shopping') or
   die("could not connect" . mysqli_error());

   $query=" SELECT * FROM SIGNUP WHERE email='$email' && password='$password'";
   
   $userCreated = mysqli_query($conn,$query);
	if($userCreated == true){
        mysqli_close($conn);
		echo "Login Successfully";
    }
	else{
		echo "Error" . mysqli_errno();
	    mysqli_close($conn);
    }
    header("Location: Shop.html")
?>
