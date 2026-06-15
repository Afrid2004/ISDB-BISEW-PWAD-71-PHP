<?php
$err = [];
$result="";
$color = "text-black";
if (isset($_POST['btn_submit'])) {
    $number = intval(trim($_POST['number']));
    if ($_POST['number'] === "") {
        $err['empty'] = "Number can not be empty!";
    }

    if ($number > 100 || $number < 0) {
        $err['invalid'] = "Invalid number!";
    }

    if (!count($err) > 0) {
        switch (floor($number / 10)) {
            case 10:
            case 9:
                $result = "Your grade is Golden A+";
                $color='text-success';
                break;
            case 8:
                $result = "Your grade is A+";
                $color='text-success';
                break;
            case 7:
                $result = "Your grade is A";
                $color='text-success';
                break;
            case 6:
                $result = "Your grade is A-";
                $color='text-success';
                break;
            case 5:
                $result = "Your grade is B";
                $color='text-warning';
                break;
            default:
                $result = "Your grade is Fail";
                $color='text-danger';
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Grading system</title>
</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div style="min-height: 100vh;" class="d-flex align-items-center justify-content-center">
                <div class="bg-white rounded-4 p-4 shadow-sm w-50">
                    <h4 class="mb-3">Grading system</h4>
                    <div class="mb-3">
                        <form method="post">
                            <div class="d-flex align-items-center gap-3">
                                <input value="<?php echo $number ?>" type="number" class="form-control" name="number" id="number" required placeholder="Enter your number">
                                <button type="submit" class="btn btn-success flex-shrink-0" name="btn_submit">Check Grade</button>
                            </div>
                        </form>
                    </div>

                    <div>
                        <h5 class="mb-3">Result Box</h5>
                        <div class="bg-light p-4 rounded-4 d-flex align-items-center justify-content-center">
                            <p class="fs-2 <?php echo $color ?>"><?php echo $result ? $result : "" ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>