<!DOCTYPE html>
<html>
<head>
    <title>Activity 7: BMI Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 7: BMI Calculator</h1>
    
    <?php
    $weight = 70; 
    $height = 1.75; 
    
    $bmi = $weight / ($height * $height);
    
    echo "<div class='result'>";
    echo "Weight: $weight kg<br>";
    echo "Height: $height m<br>";
    echo "BMI: " . number_format($bmi, 2);
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>