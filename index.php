<?php

include "vendor/autoload.php";

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data in MongoDB</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <!-- styles -->
    <style>
        body {
            background-color: #FFDCD5;
        }
        h1{
            text-align: center;
            margin-top: 30px;
        }

    </style>

</head>
<body>
    <h1>STUDENT DATABASE</h1>
    <br>
    <table class="table table-bordered border-success">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Date</th>
                <th>Address</th>
                <th>Program</th>
                <th>Contact Number</th>
                <th>Emergency Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $student): ?>
                <tr>
                    <td><?= $student['_id'] ?></td>
                    <td><?= $student['studentId'] ?></td>
                    <td><?= $student['firstName'] ?></td>
                    <td><?= $student['lastName'] ?></td>
                    <td><?= $student['birthdate'] ?></td>
                    <td><?= $student['address'] ?></td>
                    <td><?= $student['program'] ?></td>
                    <td><?= $student['contactNumber'] ?></td>
                    <td><?= $student['emergencyContact'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>