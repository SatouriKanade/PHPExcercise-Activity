<!DOCTYPE html>
<html>
<head>
    <title>Activity 2: Simple Math</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 2: Simple Math</h1>
    
    <?php
    $a = 15;
    $b = 5;
    
    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    
    echo "<div class='result'>";
    echo "Numbers: $a and $b<br>";
    echo "Sum: $sum<br>";
    echo "Difference: $difference<br>";
    echo "Product: $product<br>";
    echo "Quotient: $quotient";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>