<?php
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$college = $_POST['college'];
	$grade = $_POST['grade'];

    $conn = new mysqli('localhost','root','','osama');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into student(firstName, lastName, email, college, grade) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $email, $college, $grade);
		$execval = $stmt->execute();
		echo $execval;
		echo $firstName . ' '."تم التسجيل بنجاح";

		$stmt->close();
		$conn->close();
        header("Location: http://localhost/student/"); 
        exit();
	}
?>