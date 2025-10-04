<!DOCTYPE html>
<html>
<head>
    <title>Activity 8: String Manipulation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        textarea { padding: 8px; width: 100%; border: 1px solid #ddd; border-radius: 4px; height: 100px; }
        button { background: #3498db; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Activity 8: String Manipulation</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="sentence">Enter a sentence:</label>
                <textarea id="sentence" name="sentence" required><?php echo isset($_POST['sentence']) ? htmlspecialchars($_POST['sentence']) : ''; ?></textarea>
            </div>
            
            <button type="submit">Analyze Sentence</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sentence = $_POST['sentence'];
            
            $char_count = strlen($sentence);
            $word_count = str_word_count($sentence);
            $uppercase = strtoupper($sentence);
            $lowercase = strtolower($sentence);
            $reversed = strrev($sentence);
            
            echo "<div class='result'>";
            echo "<h3>String Analysis:</h3>";
            echo "Original sentence: " . htmlspecialchars($sentence) . "<br><br>";
            echo "Number of characters: $char_count<br>";
            echo "Number of words: $word_count<br>";
            echo "Uppercase: " . htmlspecialchars($uppercase) . "<br>";
            echo "Lowercase: " . htmlspecialchars($lowercase) . "<br>";
            echo "Reversed: " . htmlspecialchars($reversed);
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>