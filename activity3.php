<!DOCTYPE html>
<html>
<head>
    <title>Activity 3: Area and Perimeter</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 3: Area and Perimeter of a Rectangle</h1>
    
    <?php
    $length = 10;
    $width = 5;
    
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    
    echo "<div class='result'>";
    echo "Length: $length<br>";
    echo "Width: $width<br>";
    echo "Area: $area<br>";
    echo "Perimeter: $perimeter";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>