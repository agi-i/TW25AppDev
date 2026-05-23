<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Fruits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$profiles = [
    ["name" => "Banana", "description" => "Color yellow", "facts" => "Good source of potassium."],
    ["name" => "Strawberry", "description" => "Are usually red.", "facts" => "Has an excellent nutritional profile and contain high amounts of vitamin C"],
    ["name" => "Watermelon", "description" => "Green on the outside, red on the inside.", "facts" => "Watermelon is 92% water, making it a great choice for hydration."],
    ["name" => "Kiwi", "description" => "Color brown with green flesh.", "facts" => "They’re packed with nutrients, including vitamin C, vitamin K, and fiber."],
    ["name" => "Mango", "description" => "Color yellow, red, or green.", "facts" => "They’re sweet and juicy, making them a popular choice for smoothies and desserts."],
    ["name" => "Grape", "description" => "Color purple or green", "facts" => "They’re very versatile too, and feature in many wines, juices, jams, and dessert products."],
    ["name" => "Apple", "description" => "Color red or green", "facts" => "Apples are a nutritious snack and are rich in fiber."],
    ["name" => "Orange", "description" => "Color Orange", "facts" => "Oranges are a hybrid between pomelo and mandarin"],
    ["name" => "Blueberry", "description" => "Has a deep blue color.", "facts" => "They offer a lot of vitamins and minerals."],
    ["name" => "Cherry", "description" => "Color red.", "facts" => "They’re often used in desserts, jams, and beverages."],
];  
?>
<?php
$image = ["banana.jpg", "sberry.webp", "wmelon.webp", "kiwi.webp", "mango.webp", "grape.webp", "apple.webp", "orange.jpg", "blueberry.webp", "cherry.webp"];
?>
<table class="profile-table">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>
    <?php 
    $number_row = 1;
    foreach ($profiles as $person) {
    ?>
        <tr>
            <td><img src = "<?php echo $image[$number_row - 1]; ?>" alt="Profile Picture" class="profile-img"></td>
            <td><?php echo $person['name']; ?></td>
            <td><?php echo $person['description']; ?></td>
            <td><?php echo $person['facts']; ?></td>
        </tr>
    <?php 
        $number_row++;
    } 
    ?>
</table>

</body>
</html>