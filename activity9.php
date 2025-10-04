<!DOCTYPE html>
<html>
<head>
    <title>Activity 9: Bank Account Simulation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #3498db; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
        .transaction-type { display: flex; gap: 10px; }
        .transaction-type label { display: inline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Activity 9: Bank Account Simulation</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="balance">Current Balance:</label>
                <input type="number" id="balance" name="balance" step="0.01" required value="<?php echo isset($_POST['balance']) ? $_POST['balance'] : '1000'; ?>">
            </div>
            
            <div class="form-group">
                <label>Transaction Type:</label>
                <div class="transaction-type">
                    <label><input type="radio" name="transaction_type" value="deposit" <?php echo (!isset($_POST['transaction_type']) || $_POST['transaction_type'] == 'deposit') ? 'checked' : ''; ?>> Deposit</label>
                    <label><input type="radio" name="transaction_type" value="withdraw" <?php echo (isset($_POST['transaction_type']) && $_POST['transaction_type'] == 'withdraw') ? 'checked' : ''; ?>> Withdraw</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" step="0.01" required value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>">
            </div>
            
            <button type="submit">Process Transaction</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $balance = $_POST['balance'];
            $transaction_type = $_POST['transaction_type'];
            $amount = $_POST['amount'];
            
            echo "<div class='result'>";
            echo "<h3>Transaction Results:</h3>";
            echo "Initial Balance: $" . number_format($balance, 2) . "<br>";
            
            if ($transaction_type == 'deposit') {
                $balance += $amount;
                echo "Deposit: $" . number_format($amount, 2) . "<br>";
            } else {
                if ($amount <= $balance) {
                    $balance -= $amount;
                    echo "Withdrawal: $" . number_format($amount, 2) . "<br>";
                } else {
                    echo "<span style='color: red;'>Error: Insufficient funds for withdrawal of $" . number_format($amount, 2) . "</span><br>";
                }
            }
            
            echo "<strong>Final Balance: $" . number_format($balance, 2) . "</strong>";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>