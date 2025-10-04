<!DOCTYPE html>
<html>
<head>
    <title>Activity 9: Bank Account Simulation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 9: Bank Account Simulation</h1>
    
    <?php
    $balance = 1000;
    $deposit = 500;
    $withdraw = 200;
    
    echo "<div class='result'>";
    echo "Initial Balance: $$balance<br>";
    echo "Deposit: $$deposit<br>";
    echo "Withdrawal: $$withdraw<br>";
    
    $balance += $deposit;
    $balance -= $withdraw;
    
    echo "Final Balance: $$balance";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>