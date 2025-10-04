<!DOCTYPE html>
<html>
<head>
    <title>Activity 5: Swapping Variables</title>
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
        <h1>Activity 5: Swapping Variables</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="a">First Value:</label>
                <input type="text" id="a" name="a" required value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="b">Second Value:</label>
                <input type="text" id="b" name="b" required value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>">
            </div>
            
            <button type="submit">Swap Values</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'];
            $b = $_POST['b'];
            
            echo "<div class='result'>";
            echo "<h3>Before swapping:</h3>";
            echo "a = $a, b = $b<br><br>";
            
            // Swapping using a temporary variable
            $temp = $a;
            $a = $b;
            $b = $temp;
            
            echo "<h3>After swapping:</h3>";
            echo "a = $a, b = $b";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>