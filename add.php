<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./css/bootstrap.css">

<head>
    <title>Add user</title>
</head>

<body>
    <div class="container">
        <div class="bg-light">
            <div class="header text-center">
                <h3>Add User</h3>
            </div>
            <form onsubmit="return false">
                <div class="row g-3 mx-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        <div class="error text-danger" id="name_error"></div>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="age" placeholder="Enter Age">
                        <div class="error text-danger" id="age_error"></div>
                    </div>
                    <div class="col-md-12">
                        <select class="form-select" id="country" placeholder="select country">
                            <option value="">Please select</option>
                            <option value="india">India</option>
                            <option value="japan">Japan</option>
                            <option value="america">America</option>
                        </select>
                        <div class="error text-danger" id="country_error"></div>
                    </div>
                    <div class="col-md-6 ">
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
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="english" value="english" name="language">
                            <label class="form-check-label" for="inlineCheckbox1">English</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="gujarati" value="gujarati" name="language">
                            <label class="form-check-label" for="inlineCheckbox2">Gujarati</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="hindi" value="hindi" name="language">
                            <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
                        </div>
                        <div class="error text-danger" id="language_error"></div>
                    </div>
                    <div class="button text-center mb-3">
                        <button type="submit" class="btn btn-info" onclick="validation()">Register</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>