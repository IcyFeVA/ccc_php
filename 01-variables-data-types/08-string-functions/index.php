<?php
$output = null;
$string = "Hello there, World. How are you?";
$ccn = "8480321545694587";

$output = strlen($string);

$output = str_word_count($string);

$output = strpos($string, 'World');
$index = strpos($string, 'World');

// Find character at position 5
$output = $string[4];

// starting character plus the next 3
$output = substr($string, $index, 3);

// last 4 digits of the credit card number
$output = substr( $ccn, strlen($ccn) - 4 );

$output = str_replace('Hello', 'Howdy', $string);

$output = strtolower($string);
$output = strtoupper($string);
$output = ucwords($string);

$email = "    theiRemail@aDDress.com     ";
$output = strtolower(trim($email));

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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>