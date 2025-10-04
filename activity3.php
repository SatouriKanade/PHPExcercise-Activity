<!DOCTYPE html>
<html>
<head>
    <title>Activity 3: Area and Perimeter</title>
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
        <h1>Activity 3: Area and Perimeter of a Rectangle</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="length">Length:</label>
                <input type="number" id="length" name="length" step="any" required value="<?php echo isset($_POST['length']) ? $_POST['length'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="width">Width:</label>
                <input type="number" id="width" name="width" step="any" required value="<?php echo isset($_POST['width']) ? $_POST['width'] : ''; ?>">
            </div>
            
            <button type="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $length = $_POST['length'];
            $width = $_POST['width'];
            
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            
            echo "<div class='result'>";
            echo "<h3>Results:</h3>";
            echo "Length: $length<br>";
            echo "Width: $width<br>";
            echo "Area: $area<br>";
            echo "Perimeter: $perimeter";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>