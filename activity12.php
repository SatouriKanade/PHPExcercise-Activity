<!DOCTYPE html>
<html>
<head>
    <title>Activity 12: Travel Cost Estimator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 12: Travel Cost Estimator</h1>
    
    <?php
    $distance = 300; 
    $fuel_consumption = 12; 
    $fuel_price = 60; 
    
    $liters_needed = $distance / $fuel_consumption;
    $travel_cost = $liters_needed * $fuel_price;
    
    echo "<div class='result'>";
    echo "Distance: $distance km<br>";
    echo "Fuel Consumption: $fuel_consumption km/L<br>";
    echo "Fuel Price: $$fuel_price per liter<br>";
    echo "Liters Needed: " . number_format($liters_needed, 2) . " L<br>";
    echo "Estimated Travel Cost: $" . number_format($travel_cost, 2);
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>