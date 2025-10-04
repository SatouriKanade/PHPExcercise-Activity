<!DOCTYPE html>
<html>
<head>
    <title>Activity 5: Swapping Variables</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 5: Swapping Variables</h1>
    
    <?php
    $a = 10;
    $b = 20;
    
    echo "<div class='result'>";
    echo "Before swapping:<br>";
    echo "a = $a, b = $b<br><br>";
    
    // Swapping using a temporary variable
    $temp = $a;
    $a = $b;
    $b = $temp;
    
    echo "After swapping:<br>";
    echo "a = $a, b = $b";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>