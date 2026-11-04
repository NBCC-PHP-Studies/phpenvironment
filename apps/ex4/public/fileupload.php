<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container text-center pt-5">Upload our Application Logo</div>

    <div class="d-flex flex-row justify-content-around">
        <div class="card mt-3">
            <div class="card-header font-weight-bold">
                Calculator
            </div>
            <div class="card-body">
                <form method="POST" action="fileupload.php" enctype="multipart/form-data">
                    <div>
                        <label for="image">Select an image:</label>
                        <input type="file" name="image" id="image" accept=".png,.jpg,.jpeg">
                    </div>

                    <button class="btn btn-primary" type="submit">Upload</button>

                </form>
            </div>
        </div>
    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Check that a file was uploaded
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {

            $file = $_FILES["image"];

            // Get the uploaded file information
            $fileName = $file["name"];
            $tmpName = $file["tmp_name"];
            $fileSize = $file["size"];

            // Get the file extension
            $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Only allow PNG and JPG
            $allowedTypes = ["png", "jpg", "jpeg"];

            if (!in_array($extension, $allowedTypes)) {
                echo "Only PNG and JPG images are allowed.";
            } else {

                // Create uploads directory if it doesn't exist
                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }

                // Generate a unique filename
                $newFileName = "logo.". $extension;

                // Move uploaded file into uploads directory
                if (move_uploaded_file($tmpName, "uploads/" . $newFileName)) {
                    echo "<div class='text-center'>";
                    echo "Image uploaded successfully!";
                    echo "<br>";
                    echo "<img src='uploads/$newFileName' width='300'>";
                    echo "</div>";
                } else {
                    echo '<div class="alert alert-danger">Error moving uploaded file.</div>';
                }
            }

        } else {
            echo "Please select a file to upload.";
        }
    }

    ?>
</body>

</html>