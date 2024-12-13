<?php

$score = 30;

// if($score > 40) {
//     echo "High Score";
// } else {
//     echo "Low Score";
// }

$loggedIn = false;
$result = $score > 40 ? "High Score" : "Low Score";

$headline = $loggedIn === true ? "Hello Jackie" : "Please log in.";

echo $headline;
