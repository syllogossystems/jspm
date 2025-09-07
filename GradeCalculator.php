<?php
// Student info
$name = "Prabhat";
$marks = [
    "Artificial Intelligence" => 85,
    "Data Science" => 78,
    "Machine Learning" => 92
];

// Calculate total & average
$total = array_sum($marks);
$avg = $total / count($marks);

// Function to calculate grade
function getGrade($avg) {
    if ($avg >= 90) return "A";
    elseif ($avg >= 75) return "B";
    elseif ($avg >= 50) return "C";
    else return "F";
}

// Result
$grade = getGrade($avg);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2b6cb0;
            text-align: center;
        }
        .info {
            margin-bottom: 15px;
        }
        .marks {
            margin: 10px 0;
        }
        .marks p {
            margin: 4px 0;
        }
        .result {
            background: #edf2f7;
            padding: 10px;
            border-radius: 6px;
            margin-top: 15px;
        }
        .grade {
            font-size: 1.2em;
            font-weight: bold;
            color: #2f855a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Grade Calculator</h2>

        <div class="info">
            <p><strong>Student:</strong> <?= $name; ?></p>
        </div>

        <div class="marks">
            <h3>Marks</h3>
            <?php foreach ($marks as $sub => $score): ?>
                <p><?= $sub; ?>: <?= $score; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="result">
            <p><strong>Total Marks:</strong> <?= $total; ?></p>
            <p><strong>Average Marks:</strong> <?= round($avg, 2); ?></p>
            <p class="grade"><strong>Final Grade:</strong> <?= $grade; ?></p>
        </div>
    </div>
</body>
</html>
