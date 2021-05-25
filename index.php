<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="container text-center">
            <div class="col-md-6 offset-md-3">
                <h1 class='mt-5'>Student Management</h1>
                <h2 class='mt-5'>Add Student</h2>
                    <form action="studentdb.php" method="post">
                    
                        <div class="col-md-12">
                            <input type="text" name="firstName"  class="input form-control mt-2" placeholder="Enter Frist Name">
                            <input type="text" name="lastName"  class="input form-control mt-2" placeholder="Enter last Name">
                            <input type="text" name="email"  class="input form-control mt-2" placeholder="Enter email">
                            <input type="text" name="college"  class="input form-control mt-2" placeholder="Enter college">
                            <input type="number" name="grade" class="input form-control mt-2" placeholder="Enter grade">

                        </div>
                        
                    
                    <div class="col-md-12">
                            <input class="btn btn-primary mt-3 " type="submit" value="Add">

                        </div>
                        <div class="col-md-12">
                            <input class="btn btn-primary mt-3 " value="view all student" onclick="location.href='http://localhost/student/allstudent.php'">

                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="container text-center">
            <div class="col-md-6 offset-md-3">
                <h1 class="mt-3">customer list</h1>
                <ul class="todo-ul list-group">
                </ul>
            </div>
        </div>
    </div> -->

    <!-- <script src="./script.js"></script> -->
</body>

</html>