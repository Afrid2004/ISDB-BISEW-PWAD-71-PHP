<?php
require_once("../student-class.php");
$errors = [];
if(isset($_GET['id'])){
    $fndId = $_GET['id'];
    // find data using the id
    $foundedData = Student::find($fndId);

    //extract founded data array to variables
    extract($foundedData);
}
if(isset($_POST['btn_submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    //error handling
    if($id == ''){
        $errors['id'] = 'Student ID is required';
    }
    if($name == ''){
        $errors['name'] = 'Student name is required';
    }
    if($email == ''){
        $errors['email'] = 'Student email is required';
    }
    if($gender == ''){
        $errors['gender'] = 'Student gender is required';
    }
    if($mobile == ''){
        $errors['mobile'] = 'Student mobile is required';
    }

    if(!count($errors)){
        $updatedData = new Student($id, $name,$email,$gender,$mobile);
        $updatedData->updateStudent();
        header('location:../index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Update Student</title>
</head>

<body>
    <div class="container">
        <div class="w-50 mx-auto py-5">
            <h3 class="text-center">Update Student</h3>
            <form method="post">
                <div class="mb-2">
                    <label class="form-label" for="id">Student Id</label>
                    <input type="number" value="<?php echo $id; ?>" id="id" class="form-control" name="id" placeholder="Enter Student Id" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="name">Student Name</label>
                    <input type="text" value="<?php echo $name; ?>" id="name" class="form-control" name="name" placeholder="Enter Student Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Student Email</label>
                    <input type="email" value="<?php echo $email; ?>" id="email" class="form-control" name="email" placeholder="Enter Student Email" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="gender">Student Gender:</label>
                    <input type="radio" id="male" <?php echo $gender == 'male' ? 'checked' : ''?> value="male"  class="form-check-input ms-2 me-1" name="gender" placeholder="Enter Student Email">Male
                    <input type="radio" id="female" <?php echo $gender == 'female' ? 'checked' : ''?> value="female"  class="form-check-input me-1" name="gender">Female
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mobile">Student Mobile</label>
                    <input type="tel" id="mobile" value="<?php echo $mobile; ?>" class="form-control" name="mobile" placeholder="Enter Student Mobile" required>
                </div>

                <button type="submit" name="btn_submit" class="btn btn-dark w-100">Update Student</button>
            </form>
        </div>
    </div>
</body>

</html>