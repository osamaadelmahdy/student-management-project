<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <?php
    $conn = new mysqli('localhost','root','','osama');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $sql = "SELECT id, firstName, lastName, email, college, grade FROM student";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            echo '
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">email</th>
            <th scope="col">college</th>
            <th scope="col">grade</th>
          </tr>
        </thead>
        <tbody>
        
        ';
            while($row = $result->fetch_assoc()) {
            echo 
            '<tr><td>' . $row["id"]. '</td>'.
            '<td>' . $row["firstName"]. '</td>'.
            '<td>' . $row["lastName"]. '</td>'.
            '<td>' . $row["email"]. '</td>'.
            '<td>' . $row["college"]. '</td>'.
            '<td>' . $row["grade"] .' </td></tr>';
            }
            echo '
                
                </tbody>
                </table>
            ';
        } else {
            echo "0 results";
        }
        $conn->close();
    }
?>
<div style="width: 100%;
    height: 100px;
    text-align: center;">
<button class="btn btn-primary mt-3 " onclick="location.href='http://localhost/student/'">Add Student</button>

</div>

</body>
</html>
