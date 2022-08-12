<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>update</title>
</head>

<body>
    <?php ini_set("display_errors", true);
    include("connection.php");
    ?>

    <div class="container">
        <div class="header text-center mb-3 mt-3">
            <h3>Update user</h3>
        </div>
        <?php $id = $_GET['id'];
        $sql = "select * from user where id = $id";
        $result = mysqli_query($conn, $sql);
        ?>
        <form onsubmit="return validation()" method="POST" class="border border-dark rounded">
            <?php $row = mysqli_fetch_assoc($result);
            // print_r($row);
            if (!empty($_POST)) {
                // print_r($_POST);
                $name = $_POST['name'];
                $age = $_POST['age'];
                $country = $_POST['country'];
                $gender = $_POST['gender'];
                $language = $_POST['language'];
                $lang = implode(",", $language);
                $sql = "update `user` set name= '$name',age='$age',country='$country',gender='$gender',language='$lang' where id = $id";
                $result = mysqli_query($conn, $sql);
                if ($result == true) {
                    header("Location:index.php?message=updated successfully");
                } else {
                    header("Location: index.php?message_error= not updated");
                }
            }
            ?>
            <div class="row g-3 mx-3">
                <div class="col-md-12">
                    <label for="name" class="mb-2">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name'] ?>">
                    <div class="error text-danger" id="name_error"></div>
                </div>
                <div class="col-md-12">
                    <label for="age" class="mb-2">Age</label>
                    <input type="text" class="form-control" name="age" id="age" value="<?php echo $row['age'] ?>">
                    <div class="error text-danger" id="age_error"></div>
                </div>

                <div class="col-md-12">
                    <label for="country" class="mb-2">Country</label>
                    <select class="form-select" name="country" id="country">
                        <option value="">Please select</option>
                        <option <?php echo $row['country'] == "india" ? "selected='selected'" : ''; ?> value="india">India</option>
                        <option <?php echo $row['country'] == "japan" ? "selected='selected'" : ''; ?> value="japan">Japan</option>
                        <option <?php echo $row['country'] == "america" ? "selected='selected'" : ''; ?> value="america">America</option>
                    </select>
                    <div class="error text-danger" id="country_error"></div>
                </div>
                <div class="col-md-12">
                    <label for="gender" class="mb-2 pe-3">Gender :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php echo $row['gender'] == "male" ? "checked='checked'" : ''; ?> type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php echo $row['gender'] == "female" ? "checked='checked'" : ''; ?> type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="error text-danger" id="gender_error"></div>
                </div>
                <?php
                $language = $row['language'];
                $exp = explode(",", $language);
                ?>
                <div class="col-md-12">
                    <label for="language" class="mb-2 pe-3">Language :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input language" <?php echo in_array("english", $exp) ? "checked='checked'" : ''; ?> type="checkbox" id="english" value="english" name="language[]">
                        <label class="form-check-label" for="inlineCheckbox1">English</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input language" <?php echo in_array("gujarati", $exp) ? "checked='checked'" : '';  ?> type="checkbox" id="gujarati" value="gujarati" name="language[]">
                        <label class="form-check-label" for="inlineCheckbox2">Gujarati</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input language" <?php echo in_array("hindi", $exp) ? "checked='checked'" : ''; ?> type="checkbox" id="hindi" value="hindi" name="language[]">
                        <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
                    </div>
                    <div class="error text-danger" id="language_error"></div>
                </div>
                <div class="error text-center text-success" id="submit_error"></div>
                <div class="button text-center mb-3">
                    <button type="submit" class="btn btn-primary" onclick="validation()">Update</button>
                </div>
                <div class="text-center my-2">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </div>

        </form>
    </div>
    <script src="./js/bootstrap.js"></script>
    <script>
        function validation() {
            var name = document.getElementById("name").value;
            var age = document.getElementById("age").value;
            var country = document.getElementById("country").value;
            var male = document.getElementById("male").checked;
            var female = document.getElementById("female").checked;
            var language = document.querySelectorAll(".language:checked");

            var nameValid = false;
            var ageValid = false;
            var countryValid = false;
            var genderValid = false;
            var languageValid = false;


            if (name == "") {
                document.getElementById("name_error").innerHTML = "Enter Name";
            } else {
                document.getElementById("name_error").innerHTML = "";
                nameValid = true;
            }
            if (age == "") {
                document.getElementById("age_error").innerHTML = "Enter Age";
            } else {
                document.getElementById("age_error").innerHTML = "";
                ageValid = true;
            }
            if (country == "") {
                document.getElementById("country_error").innerHTML = "Select Country ";
            } else {
                document.getElementById("country_error").innerHTML = "";
                countryValid = true;
            }
            if (male == false && female == false) {
                document.getElementById("gender_error").innerHTML = "Select Gender ";
            } else {
                document.getElementById("gender_error").innerHTML = "";
                genderValid = true;
            }
            if (language.length < 1) {
                document.getElementById("language_error").innerHTML = "Select language";
            } else {
                document.getElementById("language_error").innerHTML = "";
                languageValid = true;

            }
            console.log(language);

            if (nameValid && ageValid && countryValid && genderValid && languageValid) {
                document.getElementById("submit_error").innerHTML = "Validation Done";
                return true;
            } else {
                document.getElementById("submit_error").innerHTML = "validation not done";
                return false;
            }
        }
    </script>
</body>

</html>