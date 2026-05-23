
<?php 
    $errorMessage = "";
    $successMessage = "";
    if(isset($_POST["submit"])){
        $file = $_FILES["file"];
        $fileName = $file["name"];
        $tempName = $file["tmp_name"];
        $type = $file["type"];
        $size = $file["size"];
        $error = $file["error"];
        //set file name while uploading it
        $imageName = pathinfo($fileName, PATHINFO_FILENAME);
        $allowedType = ["application/pdf", "image/png", "image/jpeg", "image/webp"];
        //to findout the file extention like 1.png it will return just "png"
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($type, $allowedType)){
            if($size < 1024 * 1024){
                if(!$error){
                    move_uploaded_file($tempName, "img/$imageName.$extension");
                    $successMessage = "File has been uploaded successfully";
                    $src = "img/$imageName.$extension";
                }
            }
            else{
               $errorMessage = "Maximum file size is 1MB."; 
            }
        }
        else{
            $errorMessage = "$type is not allowed."; 
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Photo Upload</title>
</head>

<body>
    <div class="container py-5">
        <div class="w-50 mx-auto">
            <h4 class="mb-3">Photo Upload</h4>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="file" class="form-control mb-2" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-dark w-100" name="submit">Submit</button>
                <?php if($errorMessage) {?>
                    <div class="w-100">
                        <p class="alert alert-danger py-2 mt-2"><?php echo $errorMessage; ?></p>
                    </div>
                <?php } ?>
                <?php if($successMessage) {?>
                    <div class="w-100">
                        <p class="alert alert-success py-2 mt-2"><?php echo $successMessage; ?></p>
                    </div>
                <?php } ?>
            </form>

            
                <?php if(isset($src)) {?>
                    <div class="w-100 p-2 rounded rounded-md bg-light d-flex align-items-center flex-column gap-2 justify-content-center">
                        <embed src="<?php echo $src ; ?>" class="img-fluid rounded rounded-md">
                        <p class="mb-0"><?php echo $fileName ?></p>
                    </div>
                <?php } ?>
        </div>
    </div>
</body>

</html>