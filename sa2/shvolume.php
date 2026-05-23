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
    echo "  <tr><td colspan='3' class='header-row'>Volume Calculations</td></tr>";
    echo "  <tr><td class='label'>Values</td><td class='label'>Formula</td><td class='label'>Answer</td></tr>";
    echo "  <tr><td class='values'>Subtraction</td><td class='value'>$sub</td></tr>";
    echo "  <tr><td class='label'>Multiplication</td><td class='value'>$mult</td></tr>";
    echo "  <tr><td class='label'>Division</td><td class='value'>$div</td></tr>";
    echo "</table>";
}

your_function(25, 13, 6);
?>

</body>
</html>

// volume of a cube = s^3
// volume of a rectangular prism = l x w x h
// volume of a cylinder = π x r^2 x h
// volume of a pyramid = (1/3) x B x h
// volume of a sphere = (4/3) x π x r^3
