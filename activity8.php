<!DOCTYPE html>
<html>
<head>
    <title>Activity 8: String Manipulation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 8: String Manipulation</h1>
    
    <?php
    $sentence = "The quick brown fox jumps over the lazy dog";
    
    $char_count = strlen($sentence);
    $word_count = str_word_count($sentence);
    $uppercase = strtoupper($sentence);
    $lowercase = strtolower($sentence);
    
    echo "<div class='result'>";
    echo "Original sentence: $sentence<br><br>";
    echo "Number of characters: $char_count<br>";
    echo "Number of words: $word_count<br>";
    echo "Uppercase: $uppercase<br>";
    echo "Lowercase: $lowercase";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>