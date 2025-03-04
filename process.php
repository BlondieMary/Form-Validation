<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $surname = trim($_POST["surname"]);
    $bdate = trim($_POST["bdate"]);
    
    $errors = [];
    $namePattern = "/^[A-Za-z]+$/";
    
    if (!preg_match($namePattern, $name)) {
        $errors[] = "Invalid name. Only letters are allowed.";
    }
    
    if (!preg_match($namePattern, $surname)) {
        $errors[] = "Invalid surname. Only letters are allowed.";
    }
    
    if (empty($bdate)) {
        $errors[] = "Birthdate is required.";
    }
    
    if (!empty($errors)) {
        echo "<div class='alert alert-danger'>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo "<a href='index.html'>Go back</a></div>";
    } else {
        echo "<div class='alert alert-success'>";
        echo "<h2>Form submitted successfully!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Surname: $surname</p>";
        echo "<p>Birthdate: $bdate</p>";
        echo "</div>";
    }
}
?>
