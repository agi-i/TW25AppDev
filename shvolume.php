<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume Shapes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
function your_function($param1, $param2, $param3) {
    $add = $param1 + $param2 + $param3;
    $sub = $param1 - $param2 - $param3;
    $mult = $param1 * $param2 * $param3;
    $div = $param1 / $param2 / $param3;

    echo "<table class='calc-table'>";
    echo "  <tr><td colspan='2' class='header-row'>My Parameter values: $param1, $param2, $param3</td></tr>";
    echo "  <tr><td class='label'>Addition</td><td class='value'>$add</td></tr>";
    echo "  <tr><td class='label'>Subtraction</td><td class='value'>$sub</td></tr>";
    echo "  <tr><td class='label'>Multiplication</td><td class='value'>$mult</td></tr>";
    echo "  <tr><td class='label'>Division</td><td class='value'>$div</td></tr>";
    echo "</table>";
}

your_function(25, 13, 6);
?>

</body>
</html>