<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./css/bootstrap.css">
<?php ini_set("display_errors", true);
include("connection.php");
?>

<head>
    <title>Add user</title>
</head>

<body>

    <div class="container">
        <div class="header text-center">
            <h3>Add User</h3>
        </div>
        <?php

        if (!empty($_POST)) {
            $name = $_POST["name"];
            $age = $_POST["age"];
            $country = $_POST["country"];
            $gender = $_POST["gender"];
            $language = $_POST["language"];
            //this function implode is convert array in comma separated value
            $lang = implode(",", $language);
            // check this whaen eny error in your data with print_r($_POST)
            // print_r($_POST);
            // exit;
            //check what i get in $name
            // echo $name;  
            // exit;
            //insert query
            $sql = "insert into `user` (name,age,country,gender,language) values ('$name','$age','$country','$gender','$lang');";
            try {
                mysqli_query($conn, $sql);
                // rediract add to index & add user sucess 
                header("location:index.php?message= Add data Successfully");
            } catch (Exception $e) {
                // rediract add to index & not add user error
                header("location:index.php?message_error= Error data not inserted");
            }
        }
        ?>
        <form onsubmit="return validation()" method="POST" class="border border-dark rounded">
            <div class="row g-3 mx-3">
                <div class="col-md-12">
                    <label for="name" class="mb-2 mt-2">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <div class="error text-danger" id="name_error"></div>
                </div>
                <div class="col-md-12">
                    <label for="age" class="mb-2">Age</label>
                    <input type="text" class="form-control" id="age" name="age">
                    <div class="error text-danger" id="age_error"></div>
                </div>
                <div class="col-md-12">
                    <label for="country" class="mb-2">Country</label>
                    <select class="form-select" id="country" name="country">
                        <option value="">Please select</option>
                        <option value="india">India</option>
                        <option value="japan">Japan</option>
                        <option value="america">America</option>
                    </select>
                    <div class="error text-danger" id="country_error"></div>
                </div>
                <div class="col-md-12">
                    <label for="name" class="mb-2 me-3">Gender :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="error text-danger" id="gender_error"></div>
                </div>
                <div class="col-md-12">
                    <label for="name" class="mb-2 me-3">Language :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input language" type="checkbox" id="english" value="english" name="language[]">
                        <label class="form-check-label" for="inlineCheckbox1">English</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input language" type="checkbox" id="gujarati" value="gujarati" name="language[]">
                        <label class="form-check-label" for="inlineCheckbox2">Gujarati</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input language" type="checkbox" id="hindi" value="hindi" name="language[]">
                        <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
                    </div>
                    <div class="error text-danger" id="language_error"></div>
                </div>
                <div class="error text-success text-center" id="validation_error"></div>
                <div class="button text-center mb-3">
                    <button type="submit" class="btn btn-primary" onclick="validation()">Register</button>
                </div>
                <div class="text-center my-2">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </div>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>