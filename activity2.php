<!DOCTYPE html>
<html>
<head>
    <title>Activity 2: Simple Math</title>
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
        <h1>Activity 2: Simple Math</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="a">First Number:</label>
                <input type="number" id="a" name="a" step="any" required value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="b">Second Number:</label>
                <input type="number" id="b" name="b" step="any" required value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>">
            </div>
            
            <button type="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'];
            $b = $_POST['b'];
            
            $sum = $a + $b;
            $difference = $a - $b;
            $product = $a * $b;
            $quotient = $b != 0 ? $a / $b : "Undefined (division by zero)";
            
            echo "<div class='result'>";
            echo "<h3>Results:</h3>";
            echo "Numbers: $a and $b<br>";
            echo "Sum: $sum<br>";
            echo "Difference: $difference<br>";
            echo "Product: $product<br>";
            echo "Quotient: $quotient";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>