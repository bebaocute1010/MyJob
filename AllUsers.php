<?php
require 'connect.php';

$sql = "SELECT * FROM users";
$users = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <?php require 'bootstrap.php';?>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
        <?php
            foreach ($users as $user):
        ?>
                <tr>
                    <th scope="row"><?php echo $user['id'] ?></th>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href='http://localhost/MyJob/T2_6/'>Back</a>

    </div>
</body>

</html>