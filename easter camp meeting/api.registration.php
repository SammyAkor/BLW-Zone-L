<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../extras/w3.css">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
<?php
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $mobileNumber = $_POST['mobile_number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['date'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $skill = $_POST['skills'];
    $group = $_POST['group'];
    $foundation = $_POST['foundation'];
    $baptism = $_POST['baptism'];
    $cell = $_POST['cell'];
    $pcf = $_POST['pcf'];
    $chapter = $_POST['chapter'];

    include_once "../db_connect.php";
    mysqli_select_db($conn, "ecm_registration");

    $register = "insert into user_detail value ('$firstName', '$lastName', '$mobileNumber', '$email', '$gender', '$dob', '$department', '$level', '$skill', '$group', '$foundation', '$baptism', '$cell', '$pcf', '$chapter');";
    
    $result = mysqli_query($conn, $register);

    if ($result == 1) {
        header("Location: index.html?status=success");

    }
    else {
        ?>
        <div class="w3-container">
            <p class="w3-xxlarge w3-center result">Registration is Unsuccessful. Please Contact 08126864656</p>
        </div>
        <?php
    }
?>
</body>
</html>