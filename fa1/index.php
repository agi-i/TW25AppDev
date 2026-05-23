<?php
$name = "Shayne Agatha S. Jovenir";
$email = "shaynejovenir@gmail.com";
$phone = "09397343457";
$image = "resume.png";
$skills = "PHP, JavaScript, HTML, CSS";
$school = "FEU Institute of Technology - Bachelor of Science in IT with Specialization in Web and Mobile Application Development";
$profile = "I am a highly motivated student who is passionate about web and mobile application development. I am always willing and eager to learn more and improve my skills.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <img src = "<?php echo $image; ?>" alt="Profile Picture" class="profile-img">
        <h1 id = "name"><?php echo $name; ?></h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <h2> Profile: </h2>
        <p><?php echo $profile; ?></p>
        <h3> Skills: </h3>
        <p><?php echo $skills; ?></p>
        <h3> Education: </h3>
        <p><?php echo $school; ?></p>

</div>
</body>
</html>