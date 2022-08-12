<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>view</title>
</head>

<body>
    <div class="container">
        <div class="header text-center mb-3 mt-3">
            <h3>View user</h3>
        </div>
        <?php
        include("connection.php");
        $id = $_GET['id'];
        // print_r($id);
        // exit;
        if (!empty($id)) {
            // echo "hi iam working ok";
            $sql = "select * from user where id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
            <table class="table table-bordered table-width ">
                <tr>
                    <th>Id</th>
                    <td><?php echo $row['id'] ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><?php echo $row['age'] ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo $row['country'] ?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $row['gender'] ?></td>
                </tr>
                <tr>
                    <th>Language</th>
                    <td><?php echo $row['language'] ?></td>
                </tr>
            <?php } ?>
            </table>
            <div class="text-center">
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
    </div>
</body>

</html>