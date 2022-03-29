<?php
$num1 = intval($_GET['num1']);
$num2 = intval($_GET['num2']);
$result = $num1 + $num2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum 2 numbers!</title>
</head>

<body>
    <p><?= $result ?></p>
    <p><a href="form2.html">Do another sum.</a></p>
</body>

</html>