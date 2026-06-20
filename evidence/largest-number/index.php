<?php
$result = "";
$firstNumber = "";
$secondNumber = "";
$thirdNumber = "";
if (isset($_POST['btn_submit'])) {

    $firstNumber = intval($_POST['first']);
    $secondNumber = intval($_POST['second']);
    $thirdNumber = intval($_POST['third']);
    if ($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
        $result = $firstNumber;
    } else if ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
        $result = $secondNumber;
    } else {
        $result = $thirdNumber;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Largest number</title>
</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="bg-white rounded-4 shadow-sm p-4 w-50">
                    <h3 class="mb-3">Find the largest number</h3>
                    <form method="post">
                        <div class="mb-3">
                            <input type="number" value="<?php echo $firstNumber ?>" class="form-control" name="first" required placeholder="Enter first number...">
                        </div>
                        <div class="mb-3">
                            <input type="number" value="<?php echo $secondNumber ?>" class="form-control" name="second" required placeholder="Enter second number...">
                        </div>
                        <div class="mb-3">
                            <input type="number" value="<?php echo $thirdNumber ?>" class="form-control" name="third" required placeholder="Enter third number...">
                        </div>
                        <button class="btn btn-success w-100" type="submit" name="btn_submit">Check Number</button>
                    </form>

                    <?php if ($result !== "") { ?>
                        <div class="bg-light p-4 mt-3 rounded-4 d-flex align-items-center justify-content-center">
                            <p class="mb-0 fs-5">Largest number is <?php echo "$result among $firstNumber, $secondNumber and $thirdNumber" ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>