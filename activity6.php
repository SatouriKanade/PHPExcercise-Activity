<!DOCTYPE html>
<html>
<head>
    <title>Activity 6: Salary Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 6: Salary Calculator</h1>
    
    <?php
    $basic_salary = 5000;
    $allowance = 1000;
    $deduction = 500;
    
    $net_salary = $basic_salary + $allowance - $deduction;
    
    echo "<div class='result'>";
    echo "Basic Salary: $$basic_salary<br>";
    echo "Allowance: $$allowance<br>";
    echo "Deduction: $$deduction<br>";
    echo "Net Salary: $$net_salary";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>