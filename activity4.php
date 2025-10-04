<!DOCTYPE html>
<html>
<head>
    <title>Activity 4: Temperature Converter</title>
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
        <h1>Activity 4: Temperature Converter</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="celsius">Temperature in Celsius:</label>
                <input type="number" id="celsius" name="celsius" step="any" required value="<?php echo isset($_POST['celsius']) ? $_POST['celsius'] : ''; ?>">
            </div>
            
            <button type="submit">Convert to Fahrenheit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius * 9/5) + 32;
            
            echo "<div class='result'>";
            echo "<h3>Results:</h3>";
            echo "Celsius: {$celsius}°C<br>";
            echo "Fahrenheit: " . number_format($fahrenheit, 2) . "°F";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>