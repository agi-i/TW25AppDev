<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class= "container">
        <h2 style="text-align:center;"> Student Registration Form </h2>
</div>

<div class="student-info">
    <?php
        $name = "Shayne Agatha S. Jovenir";
        $dob = "2003-12-29";
        $email = "shaynejovenir@gmail.com";
        $course = "TW25";
        $gender = "Female";
        echo "<h3>Student Information:</h3>";
    ?>
    <form action = "" method = "post">
        <label>Legal Name:</label>
        <input type="text" name="" value="<?php echo $name; ?>">
        <label> Date of Birth: </label>
        <input type="date" name="" value="<?php echo $dob; ?>">
        <label>Email:</label>
        <input type="email" name="" value="<?php echo $email; ?>">
        <label>Course:</label>
        <input type="text" name="" value="<?php echo $course; ?>">
        <label>Gender:</label>
        <input type="text" name="" value="<?php echo $gender; ?>">
    </form>
</div>
<div class="prev-school">
    <?php
        $prev_school = "Mystical Rose School";
        $year_graduated = 2022;
        $language = "English";
        $reason = "Better opportunities for higher education";
        echo "<h3>Previous School Information:</h3>";
    ?>
    <form action = "" method = "post">
        <label>Previous School:</label>
        <input type="text" name="" value="<?php echo $prev_school; ?>">
        <label>Year Graduated:</label>
        <input type="number" name="" value="<?php echo $year_graduated; ?>">
        <label> Language of Instruction: </label>
        <input type="text" name="" value="<?php echo $language; ?>">
        <label>Reason for Transferring:</label>
        <input type="text" name="" value="<?php echo $reason; ?>">
    </form>
</div>
<div class="health-info">
    <?php
        $blood_type = "O+";
        $allergies = "None";
        $medical_conditions = "None";
        echo "<h3>Health Information:</h3>";
    ?>
    <form action = "" method = "post">
        <label>Blood Type:</label>
        <input type="text" name="" value="<?php echo $blood_type; ?>">
        <label>Allergies:</label>
        <input type="text" name="" value="<?php echo $allergies; ?>">
        <label>Medical Conditions:</label>
        <input type="text" name="" value="<?php echo $medical_conditions; ?>">
    </form>
</div>
<div class = "citizen-info">
    <?php
        $citizenship = "Filipino";
        $residential_address = "14 Aquarius St. TS Cruzville, Quezon City";
        $contact_number = "09123456789";
        echo "<h3>Citizenship Information:</h3>";
    ?>
    <form action = "" method = "post">
        <label>Citizenship:</label>
        <input type="text" name="" value="<?php echo $citizenship; ?>">
        <label>Residential Address:</label>
        <input type="text" name="" value="<?php echo $residential_address; ?>">
        <label>Contact Number:</label>
        <input type="text" name="" value="<?php echo $contact_number; ?>">
    </form>
</div>
</body>
</html>