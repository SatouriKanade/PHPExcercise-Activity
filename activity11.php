<!DOCTYPE html>
<html>
<head>
    <title>Activity 11: Currency Converter</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { padding: 8px; width: 100%; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #3498db; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Activity 11: Currency Converter</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="amount">Amount in PHP:</label>
                <input type="number" id="amount" name="amount" step="0.01" required value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="currency">Convert to:</label>
                <select id="currency" name="currency" required>
                    <option value="USD" <?php echo (isset($_POST['currency']) && $_POST['currency'] == 'USD') ? 'selected' : ''; ?>>US Dollar (USD)</option>
                    <option value="EUR" <?php echo (isset($_POST['currency']) && $_POST['currency'] == 'EUR') ? 'selected' : ''; ?>>Euro (EUR)</option>
                    <option value="JPY" <?php echo (isset($_POST['currency']) && $_POST['currency'] == 'JPY') ? 'selected' : ''; ?>>Japanese Yen (JPY)</option>
                </select>
            </div>
            
            <button type="submit">Convert Currency</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            
            // Exchange rates (example rates)
            $usd_rate = 0.018;
            $eur_rate = 0.016;
            $jpy_rate = 2.40;
            
            switch ($currency) {
                case 'USD':
                    $converted = $amount * $usd_rate;
                    $symbol = '$';
                    break;
                case 'EUR':
                    $converted = $amount * $eur_rate;
                    $symbol = '€';
                    break;
                case 'JPY':
                    $converted = $amount * $jpy_rate;
                    $symbol = '¥';
                    break;
                default:
                    $converted = 0;
                    $symbol = '';
            }
            
            echo "<div class='result'>";
            echo "<h3>Conversion Results:</h3>";
            echo "Amount in PHP: " . number_format($amount, 2) . "<br>";
            echo "Converted to $currency: $symbol" . number_format($converted, 2) . "<br>";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>