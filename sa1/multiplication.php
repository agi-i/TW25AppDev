<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1 style="text-align:center; margin-top: 20px;"> Multiplication Table </h1>

    <table>
        <?php
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>";
            
            for ($col = 0; $col <= 10; $col++) {

                $product = $row * $col;
                
                if (($row + $col) % 2 == 0) {
                    $color_class = "red";
                } else {
                    $color_class = "yellow";
                }
                
                echo "<td class='$color_class'>$product</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>