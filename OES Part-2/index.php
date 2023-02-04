<?php
    $name=$_POST["name"];
    $address=$_POST["address"];
    $contactno=$_POST["contactno"];
    $pay=$_POST["pay"];

    $conn = mysqli_connect('localhost','root',"",'online shopping') or
     die("could not connect" . mysqli_error());

	$sql = "insert into details values('$name','$address','$contactno','$pay')";

    $userCreated = mysqli_query($conn,$sql);
	if($userCreated == true){
        mysqli_close($conn);
		echo "Successfully created account";
    }
	else{
		echo "Error" . mysqli_errno();
	    mysqli_close($conn);
    }
    header("Location: index.html")
?>
