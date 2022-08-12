<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>in array $ option</title>
</head>

<body>
    <div class="container text-center">
        <form>
            <?php include("connection.php");
            $id = $_GET['id'];
            $sql = "select * from category where id = $id";
            print_r($sql);
            echo "<br/>";
            $res = mysqli_query($conn, $sql);
            print_r($res);
            echo "<br/>";
            $row = mysqli_fetch_assoc($res);
            print_r($row);
            echo "<br/>";
            ?>
            <select  name="category" id="category">
                <option value="">select category</option>
                <option <?php echo $row['category'] == "food" ? "selected='selected'" : ''; ?> value="food">food</option>
                <option <?php echo $row['category'] == "shoe" ? "selected='selected'" : ''; ?>value="shoe">shoe</option>
                <option <?php echo $row['category'] == "cloth" ? "selected='selected'" : ''; ?>value="cloth">cloth</option>
                <option <?php echo $row['category'] == "watch" ? "selected='selected'" : ''; ?>value="watch">watch</option>
            </select>
        </form>
        <form>
            <?php
            $sql = "select * from category";
            $result = mysqli_query($conn, $sql);
            ?>
            <table class=" table table-bordered mx-3">

                <tr>
                    <th>id</th>
                    <th>category</th>
                    <th>Actions</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['category'] ?></td>
                        <td><a href="inarray.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square mx-2"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
</body>

</html>