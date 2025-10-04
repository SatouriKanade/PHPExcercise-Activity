<!DOCTYPE html>
<html>
<head>
    <title>Activity 12: Travel Cost Estimator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #3498db; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Activity 12: Travel Cost Estimator</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="distance">Distance (km):</label>
                <input type="number" id="distance" name="distance" step="0.1" required value="<?php echo isset($_POST['distance']) ? $_POST['distance'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="fuel_consumption">Fuel Consumption (km per liter):</label>
                <input type="number" id="fuel_consumption" name="fuel_consumption" step="0.1" required value="<?php echo isset($_POST['fuel_consumption']) ? $_POST['fuel_consumption'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="fuel_price">Fuel Price (per liter):</label>
                <input type="number" id="fuel_price" name="fuel_price" step="0.01" required value="<?php echo isset($_POST['fuel_price']) ? $_POST['fuel_price'] : ''; ?>">
            </div>
            
            <button type="submit">Calculate Travel Cost</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $distance = $_POST['distance'];
            $fuel_consumption = $_POST['fuel_consumption'];
            $fuel_price = $_POST['fuel_price'];
            
            if ($fuel_consumption > 0) {
                $liters_needed = $distance / $fuel_consumption;
                $travel_cost = $liters_needed * $fuel_price;
                
                echo "<div class='result'>";
                echo "<h3>Travel Cost Estimation:</h3>";
                echo "Distance: " . number_format($distance, 2) . " km<br>";
                echo "Fuel Consumption: " . number_format($fuel_consumption, 2) . " km/L<br>";
                echo "Fuel Price: $" . number_format($fuel_price, 2) . " per liter<br>";
                echo "Liters Needed: " . number_format($liters_needed, 2) . " L<br>";
                echo "<strong>Estimated Travel Cost: $" . number_format($travel_cost, 2) . "</strong>";
                echo "</div>";
            } else {
                echo "<div class='result' style='background:#ffebee;'>Error: Fuel consumption must be greater than zero.</div>";
            }
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>