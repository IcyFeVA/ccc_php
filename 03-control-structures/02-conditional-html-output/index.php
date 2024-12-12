<?php

  $loggedIn = true;
  $name = "Jackie Chan";

  function sayHello($actorname, $movies) {
    echo "Helloouuuuuu " . $actorname . ". You have worked in more than " . $movies . " movies.";
  }

  function logIn($email, $password) {
    // submit the parameters to an API //servername.com/delete/userid?$userid
  }

  function globalScope() {
    // access the name variable from the top
    global $name;
    echo $name;
  }

  function localScope() {
    // this variable is only accessible inside this function
    $local = "Test";
    echo $local;
  }

  function sumUp($a, $b) {
    return $a + $b;
  }

  $sumOfBothValues = sumUp(4353, 132);

  echo $sumOfBothValues;
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
      <?php if($loggedIn && $name): ?>
      <h1 class="text-3xl">Welcome <?= $name ?></h1>
      
      <?php elseif ($loggedIn): ?>
      <h1 class="text-3xl">Hello there!</h1>

      <?php else : ?>
      <h1 class="text-3xl">Please log in.</h1>

      <?php endif; ?>
    </div>
  </div>
</body>

</html>