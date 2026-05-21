<?php
    $errors = [];
    //if form submited
    if (isset($_POST["submit"])) {
        //get  all form value from $_POST assosiative array
        $name = $_POST["name"] ?? "";
        $email = $_POST["email"] ?? "";
        $city = $_POST["city"] ?? ""; //if not value then empty string
        $gender = $_POST["gender"] ?? "";
        $subjects = $_POST["subject"] ?? [];
        $subject = implode(", ", $subjects);  //array join
        $address = $_POST["address"] ?? "";

        //regex patterm
        $emailRegex = "/^[a-zA-Z0-9_]{3,}[@][a-z]{3,}[.][a-z]{3,}$/";
        $nameRegex = "/^[a-zA-Z _]{4,}$/";

        //Form validation
        if ($name == "") {
            $errors["Name"] = "Name field is required!";
        }else if(!preg_match($nameRegex, $name)){
            $errors["Name"] = "Name is Invalid! Give at least 4 Charecter.";
        }
        if ($email == "") {
            $errors["Email"] = "Email field is required!";
        }else if(!preg_match($emailRegex, $email)){
             $errors["Email"] = "Invalid Email!";
        }
        if ($city == "") {
            $errors["City"] = "City field is required!";
        }
        if ($gender == "") {
            $errors["Gender"] = "Gender field is required!";
        }
        if ($subjects == []) {
            $errors["Subject"] = "Subject field is required!";
        }
        if ($address == "") {
            $errors["Address"] = "Address field is required!";
        }

        //all values array
        if (empty($errors)) {
            $formValues = ["Name" => $name, "Email" => $email, "City" => $city, "Gender" => $gender, "Subject" => $subject, "Address" => $address];

            // reset form
            $name = "";
            $email = "";
            $city = "";
            $gender = "";
            $subjects = [];
            $address = "";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Data Posting</title>
</head>

<body>
    <div class="container py-5">
        <div>
            <h4 class="mb-3">Form</h4>
            <div class="row">
                <form method="post" class="mb-3 col-12 col-md-6">
                    <div class="mb-3">
                        <input value="<?php echo $name ?? "" ?>" type="text" class="form-control mb-2" id="name" name="name" placeholder="Enter Your name...">
                        <?php echo isset($errors["Name"]) ? "<div class='alert alert-danger py-2'>{$errors["Name"]}</div>" : "" ?>
                    </div>
                    <div class="mb-3">
                        <input value="<?php echo $email ?? ""  ?>" type="email" class="form-control mb-2" id="email" name="email" placeholder="Enter Your email...">
                        <?php echo isset($errors["Email"]) ? "<div class='alert alert-danger py-2'>{$errors["Email"]}</div>" : "" ?>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="city" id="city">
                            <option selected disabled>Select City</option>
                            <option <?php echo $city=="Dhaka" ? "selected" : "" ?> value="Dhaka">Dhaka</option>
                            <option <?php echo $city=="Rajshahi" ? "selected" : "" ?> value="Rajshahi">Rajshahi</option>
                            <option <?php echo $city=="Chattogram" ? "selected" : "" ?> value="Chattogram">Chattogram</option>
                            <option <?php echo $city=="Feni" ? "selected" : "" ?> value="Feni">Feni</option>
                            <option <?php echo $city=="Noakhali" ? "selected" : "" ?> value="Noakhali">Noakhali</option>
                        </select>
                        <?php echo isset($errors["City"]) ? "<div class='alert alert-danger py-2 mt-2'>{$errors["City"]}</div>" : "" ?>
                    </div>
                    <div class="mb-3">
                        <label for="gender">Select Gender</label>
                        <label for="Male">
                            <input <?php echo ($gender ?? "")=="Male" ? "checked" : "" ?> type="radio" name="gender" id="Male" value="Male" class="mx-2">Male
                        </label>
                        <label for="Female">
                            <input <?php echo ($gender ?? "")=="Female" ? "checked" : "" ?> type="radio" name="gender" id="Female" value="Female" class="mx-2">Female
                        </label>
                        <?php echo isset($errors["Gender"]) ? "<div class='alert alert-danger py-2 mt-2'>{$errors["Gender"]}</div>" : "" ?>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="me-2">Select Subject</label>
                        <label for="HTML">
                            <input type="checkbox" <?php echo in_array("HTML", $subjects ?? []) ? "checked" : "" ?> name="subject[]" id="HTML" value="HTML" class="me-2">HTML
                        </label>
                        <label for="CSS">
                            <input type="checkbox" <?php echo in_array("CSS", $subjects ?? []) ? "checked" : "" ?> name="subject[]" id="CSS" value="CSS" class="mx-2">CSS
                        </label>
                        <label for="Bootstrap">
                            <input type="checkbox" <?php echo in_array("Bootstrap", $subjects ?? []) ? "checked" : "" ?> name="subject[]" id="Bootstrap" value="Bootstrap" class="mx-2">Bootstrap
                        </label>
                        <label for="JavaScript">
                            <input type="checkbox" <?php echo in_array("JavaScript", $subjects ?? []) ? "checked" : "" ?> name="subject[]" id="JavaScript" value="JavaScript" class="mx-2">JavaScript
                        </label>
                        <label for="PHP">
                            <input type="checkbox" <?php echo in_array("PHP", $subjects ?? []) ? "checked" : "" ?> name="subject[]" id="PHP" value="PHP" class="mx-2">PHP
                        </label>

                        <?php echo isset($errors["Subject"]) ? "<div class='alert alert-danger py-2 mt-2'>{$errors["Subject"]}</div>" : "" ?>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control"  name="address" id="address" placeholder="Enter Address..."><?php echo ($address??"") ?? "" ?></textarea>
                        <?php echo isset($errors["Address"]) ? "<div class='alert alert-danger py-2 mt-2'>{$errors["Address"]}</div>" : "" ?>
                    </div>
                    <input type="submit" name="submit" class="w-100 btn btn-dark">
                </form>

                <!-- output -->
                <div class="col-12 col-md-6">
                    <?php
                    if (isset($formValues)) {
                        echo "<h4 class='mb-3'>Form Values</h4>";
                        foreach ($formValues as $key => $value) {
                            echo "<p>{$key}: {$value}</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>