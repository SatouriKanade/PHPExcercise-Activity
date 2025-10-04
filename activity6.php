<!DOCTYPE html>
<html>
<head>
    <title>Activity 6: Salary Calculator</title>
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
        <h1>Activity 6: Salary Calculator</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="basic_salary">Basic Salary:</label>
                <input type="number" id="basic_salary" name="basic_salary" step="0.01" required value="<?php echo isset($_POST['basic_salary']) ? $_POST['basic_salary'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="allowance">Allowance:</label>
                <input type="number" id="allowance" name="allowance" step="0.01" required value="<?php echo isset($_POST['allowance']) ? $_POST['allowance'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="deduction">Deduction:</label>
                <input type="number" id="deduction" name="deduction" step="0.01" required value="<?php echo isset($_POST['deduction']) ? $_POST['deduction'] : ''; ?>">
            </div>
            
            <button type="submit">Calculate Net Salary</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $basic_salary = $_POST['basic_salary'];
            $allowance = $_POST['allowance'];
            $deduction = $_POST['deduction'];
            
            $net_salary = $basic_salary + $allowance - $deduction;
            
            echo "<div class='result'>";
            echo "<h3>Salary Breakdown:</h3>";
            echo "Basic Salary: $" . number_format($basic_salary, 2) . "<br>";
            echo "Allowance: $" . number_format($allowance, 2) . "<br>";
            echo "Deduction: $" . number_format($deduction, 2) . "<br>";
            echo "<strong>Net Salary: $" . number_format($net_salary, 2) . "</strong>";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>