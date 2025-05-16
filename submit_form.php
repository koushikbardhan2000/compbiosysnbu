<?php
// Include the DB connection
require 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize input
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Handle file upload
    $filePath = null;
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = basename($_FILES["attachment"]["name"]);
        $targetFile = $uploadDir . time() . '_' . $fileName;

        if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFile)) {
            $filePath = $targetFile;
        } else {
            die("File upload failed.");
        }
    }

    // Insert into database
    $stmt = $con->prepare("INSERT INTO contacts (name, email, phone, message, file_path) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $message, $filePath);

    if ($stmt->execute()) {
        header("Location: thankyou.php");
        exit();
    } else {
        header("Location: error.php");
        exit();
    }
    

    $stmt->close();
    $con->close();
}
?>
