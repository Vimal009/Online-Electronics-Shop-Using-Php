<?php
    $NAME=$_POST["NAME"];
    $ADDRESS=$_POST["ADDRESS"];
    $CONTACT_NO=$_POST["CONTACT_NO"];
    $PAY=$_POST["PAY"];

    $conn = mysqli_connect('localhost','root',"",'online shopping') or
     die("could not connect" . mysqli_error());

	$sql = "insert into details values('$NAME','$ADDRESS','$CONTACT_NO','$PAY')";

    $userCreated = mysqli_query($conn,$sql);
	if($userCreated == true){
        mysqli_close($conn);
		echo "Successfully created account";
    }
	else{
		echo "Error" . mysqli_errno();
	    mysqli_close($conn);
    }
    header("Location: FLIPKART.html")
?>
