<?php


if (isset($_GET['first']) && ($_GET['last']) && ($_GET['age'])) {
    $firstName = htmlspecialchars($_GET['first']);
    $lastName = htmlspecialchars($_GET['last']);
    $age = htmlspecialchars($_GET['age']);
} else {
    echo "Not all parameters have been set set!<br><br>";
}
$message = null;
$voting = null;

$firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

// if (!empty($firstName) && !empty($lastName)) {
//     echo $firstName;
//     echo $lastName;
// } else {
//     echo "Please fill the names";
// }



if(isset($age)
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 (INF 653)</title>
</head>
<body>
    <?php
    $message = "Hello, my name is $firstName $lastName." . "<br>";
    $voting = "I am $age years old and ";
    if($age >= 18){
        $voting = $voting . "I am old enough to vote in the United States.<br>";
    } else {
        $voting = $voting . "I am not old enough to vote in the United States.<br>";
    }
    echo $message;
    echo $voting;
    echo "I am around " . $age * 365 . " days old.<br>";
    echo "Today is: " . date("m/d/Y");
    ?>
</body>
</html>