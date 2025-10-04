<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            padding: 30px 0;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .activity-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .activity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .activity-number {
            display: inline-block;
            background: #6a11cb;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        
        .activity-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .activity-description {
            color: #7f8c8d;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
            text-align: center;
        }
        
        .btn:hover {
            background: #2980b9;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #7f8c8d;
            border-top: 1px solid #ecf0f1;
        }
        
        @media (max-width: 768px) {
            .activities-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>PHP Activities</h1>
            <p class="subtitle">A collection of simple PHP exercises to practice programming fundamentals</p>
        </header>
        
        <div class="activities-grid">
            <div class="activity-card">
                <span class="activity-number">1</span>
                <h3 class="activity-title">Introduce Yourself</h3>
                <p class="activity-description">Create variables for your name, age, and favorite color. Print them in a sentence.</p>
                <a href="activity1.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">2</span>
                <h3 class="activity-title">Simple Math</h3>
                <p class="activity-description">Store two numbers and compute their sum, difference, product, and quotient.</p>
                <a href="activity2.php" class="btn">View Activity</a>
            </div>
>
            <div class="activity-card">
                <span class="activity-number">3</span>
                <h3 class="activity-title">Area and Perimeter</h3>
                <p class="activity-description">Calculate and display the area and perimeter of a rectangle.</p>
                <a href="activity3.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">4</span>
                <h3 class="activity-title">Temperature Converter</h3>
                <p class="activity-description">Convert Celsius temperature to Fahrenheit using the formula.</p>
                <a href="activity4.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">5</span>
                <h3 class="activity-title">Swapping Variables</h3>
                <p class="activity-description">Swap values of two variables without directly reassigning them.</p>
                <a href="activity5.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">6</span>
                <h3 class="activity-title">Salary Calculator</h3>
                <p class="activity-description">Compute and display the net salary based on basic salary, allowance, and deduction.</p>
                <a href="activity6.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">7</span>
                <h3 class="activity-title">BMI Calculator</h3>
                <p class="activity-description">Compute BMI using weight and height, then display the result.</p>
                <a href="activity7.php" class="btn">View Activity</a>
            </div>
 
            <div class="activity-card">
                <span class="activity-number">8</span>
                <h3 class="activity-title">String Manipulation</h3>
                <p class="activity-description">Display character count, word count, and case variations of a sentence.</p>
                <a href="activity8.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">9</span>
                <h3 class="activity-title">Bank Account Simulation</h3>
                <p class="activity-description">Update balance based on transactions and display the result.</p>
                <a href="activity9.php" class="btn">View Activity</a>
            </div>
>
            <div class="activity-card">
                <span class="activity-number">10</span>
                <h3 class="activity-title">Simple Grading System</h3>
                <p class="activity-description">Compute average score and display the corresponding grade.</p>
                <a href="activity10.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">11</span>
                <h3 class="activity-title">Currency Converter</h3>
                <p class="activity-description">Convert amount to USD, EUR, or JPY using exchange rates.</p>
                <a href="activity11.php" class="btn">View Activity</a>
            </div>

            <div class="activity-card">
                <span class="activity-number">12</span>
                <h3 class="activity-title">Travel Cost Estimator</h3>
                <p class="activity-description">Compute and display the estimated travel cost based on distance and fuel consumption.</p>
                <a href="activity12.php" class="btn">View Activity</a>
            </div>
        </div>
        
        <footer>
            <p>Pudos, Felicity-PHP Activities &copy; 2025</p>
        </footer>
    </div>
</body>
</html>