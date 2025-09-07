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

// Output
echo "Student: $name<br>";
foreach ($marks as $sub => $score) {
    echo "$sub: $score<br>";
}
echo "Total Marks: $total<br>";
echo "Average Marks: " . round($avg, 2) . "<br>";
echo "Final Grade: $grade<br>";
echo "Result: " . (($avg >= 40) ? "Pass" : "Fail") . "<br>";
?>
