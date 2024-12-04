<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

//echo( min(0, 150, 30, 20, -8, -200) );


//echo( 15 * -1  );
// same as this one below
//echo(abs(-6.7));

// echo(round(0.60));
// echo(round(0.38));

// echo(rand(1, 100000));

$quotes = ['Keep going!', 'Believe in yourself.', 'You got this!'];
echo $quotes[rand(0, count($quotes) - 1)];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
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
    </div>
  </div>
</body>

</html>