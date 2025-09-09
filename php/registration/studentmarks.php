<?php 
const COLLEGE_NAME = "JSPM's Jayawantrao Sawant College of Engineering (JSCOE)";
define("ADDRESS", "Survey No. 58, Indrayani Nagar, Handewadi Road, Hadapsar, Pune");

echo "<h1>Welcome to "  . COLLEGE_NAME . "</h1>";
print "<h2> Address : " . ADDRESS . "</h2>";

// Indexed array (subjects list)
$subjects = ["Data Structures", "DBMS", "Operating Systems", "Web Technologies"];

$student_id = "";
$enrollment_number = "1009";
$first_name = "Prabhat";
$last_name = "Kumar";
$date_of_birth = "09-09-1990";
$email = "prabhat.kumar@syllogossystems.com";
$phone = '+91 8087212840';

echo "Name:  $first_name $last_name <br>";
echo "Enrollment Number: $enrollment_number <br>";
print "Date of Birth: $date_of_birth <br>";
print "Email: $email <br>";
print "Phone: $phone <br>";

echo "<h3>Subjects (Indexed Array with FOR loop)</h3>";
for ($i = 0; $i < count($subjects); $i++) {
    echo "Subject " . ($i + 1) . ": " . $subjects[$i] . "<br>";
}

echo "<hr>";
// Associative array (subject → marks)
$marks = [
    "Data Structures" => 85,
    "DBMS" => 90,
    "Operating Systems" => 78,
    "Web Technologies" => 88
];

echo "<h3>Marks (Associative Array with FOREACH loop)</h3>";
$total = 0;
foreach ($marks as $subject => $score) {
    echo "$subject : $score <br>";
    $total += $score;
}

$average = $total / count($marks);
echo "<br><strong>Total Marks:</strong> $total <br>";
echo "<strong>Average Marks:</strong> $average <br>";

/**
 * Function to calculate grade based on marks
 */
function calculateGrade(int $marks): string {
    if ($marks >= 90) return "A+";
    elseif ($marks >= 80) return "A";
    elseif ($marks >= 70) return "B";
    elseif ($marks >= 60) return "C";
    else return "F";
}

/**
 * Function to calculate total & average
 * - returns total
 * - updates average by reference
 */
function calculateTotalAndAverage(array $marks, float &$average = 0.0): int {
    $total = array_sum($marks);
    $average = $total / count($marks);
    return $total;
}
/**
 * Function with default parameter for section heading
 */
function printHeader(string $title = "Student Report"): void {
    echo "<h3>$title</h3>";
}

// Print header
printHeader();


foreach ($marks as $subject => $score) {
    echo "$subject : $score (Grade: " . calculateGrade($score) . ")<br>";
}

// Total and average
$avg = 0.0;
$total = calculateTotalAndAverage(array_values($marks), $avg);

echo "<br><strong>Total Marks:</strong> $total <br>";
echo "<strong>Average Marks:</strong> $avg <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo COLLEGE_NAME; ?></title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: #f4f7fb;
    }
    /* header {
      text-align: center;
      margin-bottom: 10px;
      font-size: 24px;
      font-weight: bold;
      color: #0f6cff;
    }
    .address{
        padding: 20px;
    }
    .content {
      width: 600px;
      padding: 40px;
      background: #ffffff;
      border-radius: 10px;
      text-align: left;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    } */
  </style>
</head>
<body>
  <!-- <header><?php echo "Welcome to" . COLLEGE_NAME; ?></header>
  <div class="address"> <?= ADDRESS ?></div>
  <div class="content">
    <label>Enrollment Number : <?= $enrollment_number ?></label>
    <label>Name : <?= $first_name ?> <?= $last_name ?></label>
    <label>Date of Birth : <?= $date_of_birth ?> </label>
    <label>Email : <?= $email ?></label>
    <label>Phone : <?= $phone ?></label>

    <hr>
    <?php 
      // Print header
      printHeader();

      // Print subjects with grades
      foreach ($marks as $subject => $score) {
          echo "$subject : $score (Grade: " . calculateGrade($score) . ")<br>";
      }

      // Total and average
      $avg = 0.0;
      $total = calculateTotalAndAverage(array_values($marks), $avg);

      echo "<br><strong>Total Marks:</strong> $total <br>";
      echo "<strong>Average Marks:</strong> $avg <br>";
    ?>
  </div> -->
</body>
</html>