<?php
    $teachersName = "Bob";
    $cardHeading = "Welcome To The Course";
    $paragraph = "<p>In this course, you will learn the fundamentals of the PHP language</p>";

    $aString = "This is a string";      // String
    $myFavoriteNumber = 56445628;       // Integer
    $decimal = 3.4156456655;            // Floating Point Number
    $isLoggedIn = false;                // Boolean
    $middleName = null;                 // Empty variable
    $object = [];                       // Object / Array / Function
    $letsGo = new stdClass();           // Class    

    // var_dump($decimal);              // console log for php

    $birthYear = 1981;
    $birthDay = 23;

    $result = $birthDay / $birthYear;
    var_dump($result);

    $firstname = "Ting-yu";
    $lastname = "Chan";
    $fullName = $firstname . " " . $lastname;

    var_dump($fullName);
?>

<!DOCTYPE html>
<html lang="en">

<script>
    const firstname = "Pascal"
    const lastName = "Zirn"

    const combined = firstname + " " + lastName
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= "Hello $fullName" ?></h1>
        </div>
    </header>
    
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $cardHeading ?></h2>
            <?= $paragraph ?>
        </div>
    </div>
</body>
</html>