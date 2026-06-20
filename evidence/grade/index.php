<?php
$result = "";
$grade = "";
$color="";
if (isset($_POST['btn_submit'])) {
    $grade = trim($_POST['grade']);
    switch (strtolower($grade)) {
        case 'a+':
            $result = "Outstanding";
            $color = 'text-info fw-bold';
            break;
        case 'a':
            $result = "Very Good";
            $color = 'text-success fw-bold';
            break;
        case 'b':
            $result = "Good";
            $color = 'text-primary fw-bold';
            break;
        case 'c':
            $result = "Poor";
            $color = 'text-warning fw-bold';
            break;
        default:
            $result = "Fail";
            $color = 'text-danger fw-bold';
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Grade Value</title>
</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="bg-white rounded-4 shadow-sm p-4 w-50">
                    <h3 class="mb-3">Display Message of Grading</h3>
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" value="<?php echo $grade ?>" class="form-control" name="grade" required placeholder="Enter your grade...">
                        </div>
                        <button class="btn btn-success w-100" type="submit" name="btn_submit">Show Result</button>
                    </form>

                    <?php if ($result !== "") { ?>
                        <div class="bg-light p-4 mt-3 rounded-4 d-flex align-items-center justify-content-center">
                            <p class="mb-0 fs-5">Display Message: <span class=<?php echo $color; ?> ><?php echo $result; ?></span></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>