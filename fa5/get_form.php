<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personal Information - GET</title>
</head>
<body>
    <div class="container">
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" required><br><br>
    <label for="middlename">Middle Name:</label>
    <input type="text" name="middlename" id="middlename" required><br><br>
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" required><br><br>
    <label for="dateofbirth">Date of Birth:</label>
    <input type="date" name="dateofbirth" id="dateofbirth" required><br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required><br><br>
    <button type="submit" name="submit" id="submit">Submit</button>
</form>
<?php
if(isset($_GET['submit'])):
?>
<p> First Name: <?= $_GET['firstname'] ?></p>
<p> Middle Name: <?= $_GET['middlename'] ?></p>
<p> Last Name: <?= $_GET['lastname'] ?></p>
<p> Date of Birth: <?= $_GET['dateofbirth'] ?></p>
<p> Address: <?= $_GET['address'] ?></p>
<?php
endif;
?>
</div>
</body>
</html>