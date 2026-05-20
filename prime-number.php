<?php 
    //if form submited
    if(isset($_POST["submit"])){
        //get number from POST assosiative array
        $number = $_POST["number"];

        //prime number function
        function isPrime(int $num){
            if($num<2){
                return false;
            }
            for($i = 2; $i < $num; $i++){
                if($num%$i == 0){
                    return false;
                }
            }
            return true;
        }

        //finally return the result
        $result = isPrime($number) ? "<h1 class='text-success'>{$number} is a Prime Number.</h1>" : "<h1 class='text-danger'>{$number} not is a Prime Number.</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Prime Number</title>
</head>

<body>

    <div class="container py-5">
        <div class="w-50 mx-auto">
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Number</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="Enter number..." required>
                </div>
                <button type="submit" class="btn btn-dark w-100" name="submit">Submit</button>
            </form>

            <div class="mt-2">
                <?php if(isset($result)): echo $result; endif;?>
            </div>
        </div>
    </div>

</body>

</html>