<?php

$code = "";

$blogPosts = [
    "10 Tips for Better UI/UX Design",
    "The Future of Web Development in 2024",
    "How to Create a Responsive Design: A Step-by-Step Guide",
    "Top 5 Coding Languages for Beginners",
    "The Role of Artificial Intelligence in Modern Design",
    "Understanding User Psychology in Design",
    "Best Practices for Mobile App Development",
    "Why Accessibility Matters in Web Design",
    "The Evolution of JavaScript: What's New?",
    "Common Mistakes in UX Design and How to Avoid Them"
];

for( $i = 0; $i < count($blogPosts); $i++ ) {
    $code .= $blogPosts[$i] . "<br />";
    $code .= "<hr class='myClass'>";
}


// $a = 0;
// while ($a <= 10) {
//     echo "Hello<br>";
//     $a++;
// }


// $a = 0;
// while( $a < count($blogPosts) ) {
//     echo $blogPosts[$a] . "<br>";
//     $a++;
// }


while( count($blogPosts) > 0) {
    echo $blogPosts[0] . "<br>";
    echo "<br>";
    array_shift($blogPosts);
}


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
            <?php echo $code; ?>
        </div>
    </div>
</body>

</html>