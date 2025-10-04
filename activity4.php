<!DOCTYPE html>
<html>
<head>
    <title>Activity 4: Temperature Converter</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 4: Temperature Converter</h1>
    
    <?php
    $celsius = 25;
    $fahrenheit = ($celsius * 9/5) + 32;
    
    echo "<div class='result'>";
    echo "Celsius: $celsius°C<br>";
    echo "Fahrenheit: $fahrenheit°F";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>