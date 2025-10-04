<!DOCTYPE html>
<html>
<head>
    <title>Activity 11: Currency Converter</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 11: Currency Converter</h1>
    
    <?php
    $amount = 100; 
    $usd_rate = 0.018; 
    $eur_rate = 0.016; 
    $jpy_rate = 2.40; 
    
    $usd = $amount * $usd_rate;
    $eur = $amount * $eur_rate;
    $jpy = $amount * $jpy_rate;
    
    echo "<div class='result'>";
    echo "Amount in PHP: $amount<br><br>";
    echo "USD: $" . number_format($usd, 2) . "<br>";
    echo "EUR: €" . number_format($eur, 2) . "<br>";
    echo "JPY: ¥" . number_format($jpy, 2);
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>