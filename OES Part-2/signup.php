<?php
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $contactno=$_POST["contactno"];
    $password=$_POST["password"];

    $conn = mysqli_connect('localhost','root',"",'online shopping') or
     die("could not connect" . mysqli_error());

	$sql = "insert into signup values('$firstname','$lastname','$email', '$contactno','$password')";

    $userCreated = mysqli_query($conn,$sql);
	if($userCreated == true){
        mysqli_close($conn);
		echo "Account Created Successfully Please Login";
    }
	else{
		echo "Error" . mysqli_errno();
	    mysqli_close($conn);
    }
    header("Location: Flipkart.html")
?>
