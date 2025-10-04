<!DOCTYPE html>
<html>
<head>
    <title>Activity 10: Simple Grading System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Activity 10: Simple Grading System</h1>
    
    <?php
    $math = 85;
    $english = 92;
    $science = 78;
    
    $average = ($math + $english + $science) / 3;
    
    
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    
    echo "<div class='result'>";
    echo "Math: $math<br>";
    echo "English: $english<br>";
    echo "Science: $science<br>";
    echo "Average: " . number_format($average, 2) . "<br>";
    echo "Grade: $grade";
    echo "</div>";
    ?>
    
    <a href="index.html" class="back-btn">Back to Activities</a>
</body>
</html>