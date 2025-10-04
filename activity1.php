<!DOCTYPE html>
<html>
<head>
    <title>Activity 1: Introduce Yourself</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 1: Introduce Yourself</h1>
    
    <?php
    $name = "Felicity Pudos";
    $age = 20;
    $favorite_color = "blue";
    $place = "Ambiong La Trinidad";
    
    echo "<div class='result'>";
    echo "Hi, I'm $name, I am $age years old, and my favorite color is $favorite_color. I currently reside at $place with my parents and my sibling";
    echo "</div>";
    ?>
    
    <a href="index.php" class="back-btn">Back to Activities</a>
</body>
</html>