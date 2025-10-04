<!DOCTYPE html>
<html>
<head>
    <title>Activity 7: BMI Calculator</title>
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
        <h1>Activity 7: BMI Calculator</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" step="0.1" required value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="height">Height (meters):</label>
                <input type="number" id="height" name="height" step="0.01" required value="<?php echo isset($_POST['height']) ? $_POST['height'] : ''; ?>">
            </div>
            
            <button type="submit">Calculate BMI</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            
            if ($height > 0) {
                $bmi = $weight / ($height * $height);
                
                // Determine BMI category
                if ($bmi < 18.5) {
                    $category = "Underweight";
                } elseif ($bmi < 25) {
                    $category = "Normal weight";
                } elseif ($bmi < 30) {
                    $category = "Overweight";
                } else {
                    $category = "Obese";
                }
                
                echo "<div class='result'>";
                echo "<h3>BMI Results:</h3>";
                echo "Weight: $weight kg<br>";
                echo "Height: $height m<br>";
                echo "BMI: " . number_format($bmi, 2) . "<br>";
                echo "Category: $category";
                echo "</div>";
            } else {
                echo "<div class='result' style='background:#ffebee;'>Error: Height must be greater than zero.</div>";
            }
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>