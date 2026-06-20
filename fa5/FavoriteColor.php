<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $_SESSION['fav_colors'] = [
        $_POST['color1'],
        $_POST['color2'],
        $_POST['color3'],
        $_POST['color4'],
        $_POST['color5']
    ];
    
    header("Location: ResultColors.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Favorite Colors Form</title>
</head>
<body>

    <form action="FavoriteColor.php" method="POST">
        <table>
            <tr>
                <th colspan="2">Enter your favorite colors</th>
            </tr>
            <tr>
                <td>Favorite color 1:</td>
                <td><input type="text" name="color1" value="Red" required></td>
            </tr>
            <tr>
                <td>Favorite color 2:</td>
                <td><input type="text" name="color2" value="Yellow" required></td>
            </tr>
            <tr>
                <td>Favorite color 3:</td>
                <td><input type="text" name="color3" value="Orange" required></td>
            </tr>
            <tr>
                <td>Favorite color 4:</td>
                <td><input type="text" name="color4" value="Violet" required></td>
            </tr>
            <tr>
                <td>Favorite color 5:</td>
                <td><input type="text" name="color5" value="Blue" required></td>
            </tr>
            <tr>
                <td></td>
                <td class="center-btn">
                    <input type="submit" value="send colors">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>