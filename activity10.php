<!DOCTYPE html>
<html>
<head>
    <title>Activity 10: Simple Grading System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #3498db; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .result { background: #f0f8ff; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .back-btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
        .grade-A { color: #2ecc71; font-weight: bold; }
        .grade-B { color: #3498db; font-weight: bold; }
        .grade-C { color: #f39c12; font-weight: bold; }
        .grade-D { color: #e67e22; font-weight: bold; }
        .grade-F { color: #e74c3c; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Activity 10: Simple Grading System</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="math">Math Score (0-100):</label>
                <input type="number" id="math" name="math" min="0" max="100" required value="<?php echo isset($_POST['math']) ? $_POST['math'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="english">English Score (0-100):</label>
                <input type="number" id="english" name="english" min="0" max="100" required value="<?php echo isset($_POST['english']) ? $_POST['english'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="science">Science Score (0-100):</label>
                <input type="number" id="science" name="science" min="0" max="100" required value="<?php echo isset($_POST['science']) ? $_POST['science'] : ''; ?>">
            </div>
            
            <button type="submit">Calculate Grade</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $math = $_POST['math'];
            $english = $_POST['english'];
            $science = $_POST['science'];
            
            $average = ($math + $english + $science) / 3;
            
            // Determine grade
            if ($average >= 90) {
                $grade = "A";
                $grade_class = "grade-A";
            } elseif ($average >= 80) {
                $grade = "B";
                $grade_class = "grade-B";
            } elseif ($average >= 70) {
                $grade = "C";
                $grade_class = "grade-C";
            } elseif ($average >= 60) {
                $grade = "D";
                $grade_class = "grade-D";
            } else {
                $grade = "F";
                $grade_class = "grade-F";
            }
            
            echo "<div class='result'>";
            echo "<h3>Grade Report:</h3>";
            echo "Math: $math<br>";
            echo "English: $english<br>";
            echo "Science: $science<br>";
            echo "Average: " . number_format($average, 2) . "<br>";
            echo "Grade: <span class='$grade_class'>$grade</span>";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="back-btn">Back to Activities</a>
    </div>
</body>
</html>