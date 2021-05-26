<?php
    $delete = $_POST['delete'];
    echo $delete;

    $conn = new mysqli('localhost','root','','osama');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "DELETE FROM student WHERE id=".$delete;

        if ($conn->query($sql) === TRUE) {
            echo '<div style="width: 100%; height: 100px; text-align: center;">';
            echo  '<h1>'."تم حذف الطالب بنجاح".'</h1>';
            echo '</div>';
        } else {
            echo "Error deleting student: " . $conn->error;
        }

        $conn->close();
        
        // header("Location: http://localhost/student/allstudent.php"); 
        // exit();
	}
?>