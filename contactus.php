<?php
	$Name = $_POST['Name'];
	$Phone = $_POST['Phone'];	
	$Email = $_POST['Email'];
	$Text = $_POST['Text'];

	// Database connection
	$conn = new mysqli('localhost','root','','policedatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactus(Name, Phone, Email, Text) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $Name ,$Phone, $Email, $Text);
		 $execval = $stmt->execute();
        
		// echo $execval;
		//  echo " successfully...";
		$stmt->close();
		$conn->close();
	}
?>