<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Manage</title>
</head>

<body>

    <?php include "connection.php"; ?>

    <div class="container">
        <div class="header text-center mb-3 mt-3">
            <h3>Manage user</h3>
        </div>
        <?php if(isset($_GET['message'])){?>
        <div class="alert alert-success">
            <?php echo $_GET['message']; ?>
        </div>
        <?php }?>
        <?php if(isset($_GET['message_error'])){?>
        <div class="alert alert-danger">
            <?php echo $_GET['message_error']; ?>
        </div>
        <?php }?>
        <?php
        $query = "select * from user";
        $exe = mysqli_query($conn, $query);
        // check query 
        // print_r($query);
        //check data 
        // print_r($exe);
        ?>
        <table class=" table table-bordered mx-3">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Language</th>
                <th class="w-10">Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($exe)) {
                //print_r($row);  echo "<br/><br/><br/>";	
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['language'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-success btn-sm">
                            <i class="bi bi-eye mx-2"></i>
                        </a>
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square mx-2"></i>
                        </a>
                        <a onclick="del(<?php echo $row['id']; ?>)" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash mx-2"></i>
                        </a>
                    </td>
                </tr>
            <?php  } ?>
        </table>
        <div class="text-center">
            <a class="btn btn-success " href="add.php">Add</a>
        </div>
    </div>
    <script>
        function del(id){
            var del_id = confirm("do you want delete this record");
            // alert(del_id);
            if(del_id){
                location.href="delete.php?id="+id;
            }

        }
    </script>
</body>

</html>