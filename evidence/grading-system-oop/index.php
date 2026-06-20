<?php

include_once("db_config.php");
include_once("student.php");
$data=null;
if (isset($_POST['btn_submit'])) {
    $id = intval($_POST['id']);
    $data = Student::result($id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Get Student Data</title>
</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="bg-white rounded-4 shadow-sm p-4 w-50">
                    <h3 class="mb-3">Get Student Info</h3>
                    <form method="post">
                        <div class="mb-3">
                            <input type="number" class="form-control" name="id" required placeholder="Enter student id...">
                        </div>
                        <button class="btn btn-success w-100" type="submit" name="btn_submit">Show Info</button>
                    </form>
                    <?php if(isset($_POST['btn_submit'])){
                        if ($data) { ?>
                        <div class="bg-light p-4 mt-3 rounded-4 d-flex align-items-center justify-content-center">
                            <div class="fs-5">
                                <span class="d-block">Student Id: <?php echo "{$data->id}" ?></span>
                                <span class="d-block">Student Name: <?php echo "{$data->name}" ?></span>
                                <span class="d-block">Batch: <?php echo "{$data->batch}" ?></span>
                            </div>
                        </div>
                    <?php } else{ ?>
                        <div class="bg-light p-4 mt-3 rounded-4 d-flex align-items-center justify-content-center">
                            <div class="fs-5">
                                <span class="d-block">No Data found!</span>
                            </div>
                        </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>