<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

 
<div style="" class="container align-items-center col-lg-4  d-flex justify-content-center" >
    <form action="./add.php" method="POST" class= "w-100 shadow rounded-5 p-5">
        
        <h1 class="display-6 text-center">
            Add a student
        </h1>
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
        <label for="">Age</label>
        <input type="text" class="form-control" name="age">
        <label for="">Class</label>
        <input type="text" class="form-control" name="class">

        <button class="btn btn-success my-2 w-100"> Submit</button>

    </form>
</div>
<div class="container col-lg-7">
    <table class="table table-striped text-center shadow rounded-3">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>class</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>


        <tbody>

        <?php

            // connection

            $conn = mysqli_connect('localhost', 'root', '', 'school1');

            // query
            $display = "SELECT * FROM student";
            $result = mysqli_query($conn,$display);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr> 
                    <td>{$row['id']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Age']}</td>
                    <td>{$row['Class']}</td>
                    <td>
                     <button class='btn btn-primary'>Update</button> </td>
                    <td>
                     <button class='btn btn-danger'>Delete</button> </td>
                    </tr>";
                }
            }
        
        ?>
        </tbody>

    </table>
</div>
</body>
</html>