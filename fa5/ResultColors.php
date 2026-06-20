<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php
    if (isset($_SESSION['fav_colors']) && is_array($_SESSION['fav_colors']))
    ?> 
    <table>
        <tr>
            <th colspan="2">Your Favorite Colors</th>
        </tr>
        <?php foreach ($_SESSION['fav_colors'] as $index => $color): ?>
            <tr>
                <td>Favorite color <?= $index + 1 ?>:</td>
                <td style="background-color: <?= ($color) ?>;">
                    <?= ($color) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table><br><br>
     <a href="FavoriteColor.php"><button>Go Back</button></a>
</div>
</body>
</html>
