<?php
    require_once('student-class.php');
    $students = Student::allData();
    $foundStd= [];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $foundStd = Student::find($id) ?? [];
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
                    <button class="btn btn-primary">Create Data</button>
                </div>
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($students as $student) {
                            list($id, $name, $email, $gender, $phone) = explode(',', $student);
                        ?>
                            <tr>
                                <td scope="col"><?php echo $id; ?></td>
                                <td scope="col"><?php echo $name; ?></td>
                                <td scope="col"><?php echo $email; ?></td>
                                <td scope="col"><?php echo $gender; ?></td>
                                <td scope="col"><?php echo $phone; ?></td>
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
                            <input type="number" class="form-control" name="id" id="id" required placeholder="Student Id...">
                        </div>
                        <button class="btn btn-dark" name="submit">Search</button>
                    </div>
                </form>
                <?php if(isset($foundStd)){ ?>
                    <ul class="list-group">
                    <?php 
                    if(count($foundStd) > 0){
                        foreach($foundStd as $key=>$std){
                    ?>
                        <li class="list-group-item"><?php echo "{$key}: {$std}" ?></li>
                    <?php } } else{
                        echo "<li class='list-group-item'>No Data Found.</li>";
                        }?>
                    </ul>
                <?php } ?>
              </div>
            </div>
        </div>
    </div>

</body>

</html>