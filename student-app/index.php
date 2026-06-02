<?php
require_once('student-class.php');
$students = Student::showAllstudent();

//get search field id
$errors = [];
$founded=[];
if (isset($_GET['id_submit'])) {
    $fid = $_GET['sid'];

    if ($fid == '') {
        $errors['id'] = 'Please enter student Id.';
    }

    if (!count($errors)) {
        $founded = Student::find($fid) ?? [];
    }
}
//delete student
if (isset($_GET['id'])) {
    $delid = $_GET['id'];
    $delStudent = Student::deleteStudent($delid);
    header('location:index.php');
    echo $delStudent;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Student Data</h3>
                    <a href="create/" class="btn btn-primary">Create Data</a>
                </div>
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $key => $student) {
                            list($id, $name, $email, $gender, $mobile) = explode(',', $student);
                        ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $name ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $gender ?></td>
                                <td><?php echo $mobile ?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a class="btn btn-warning btn-sm" href="update/?id=<?php echo $id; ?>">Update</a>
                                        <a class="btn btn-danger btn-sm" href="index.php?id=<?php echo $id; ?>">Delete</a>
                                    </div>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div>
                    <h3 class="mb-3">Search Data</h3>
                    <form method="get">
                        <div class="d-flex justify-content-between align-items-center gap-2 mb-3">
                            <div class="w-100">
                                <input type="number" class="form-control" name="sid" id="id" required placeholder="Student Id...">
                            </div>
                            <button class="btn btn-dark" name="id_submit">Search</button>
                        </div>
                    </form>
                    <div><?php echo  count($founded) > 0 ? "" :"Data Not found" ?>
                            <p><?php echo $founded['id'] ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>