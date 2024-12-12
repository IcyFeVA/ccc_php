<?php
$output = null;



for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "CCC College<br>";
    } 
    elseif ($i % 3 == 0) {
        echo "CCC<br>";
    } 
    elseif ($i % 5 == 0) {
        echo "College<br>";
    } 
    else {
        echo $i.'<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>

    <script>    
        let obj = {
            name: "John",
            email: "john@something.com",
            hobbies: ['Tennis', 'Video Games']
        }

        console.log(obj.hobbies)
    </script>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
        </div>
    </div>
</body>

</html>








Loop from 1 to 100

Echo "CCC" if the number is dividable by 3

Echo "College" if the number is dividable by 5

Echo "CCC College" if the number is dividable by 3 and 5


15 (dividable by 3 and 5)


Tips:
Use % modulus
Use if/else/elseif





