<?php

setcookie("firstname", "Shayne Agatha", time() + 10, "/");
setcookie("middlename", "Santos", time() + 20, "/");
setcookie("lastname", "Jovenir", time() + 30, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Expiration Test</title>
</head>
<body>

    <h3>Active Cookies:</h3>
    <?php
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    ?>

</body>
</html>
