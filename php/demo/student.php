<?php 
const COLLEGE_NAME = "JSPM's Jayawantrao Sawant College of Engineering (JSCOE)";
define("ADDRESS", "Survey No. 58, Indrayani Nagar, Handewadi Road, Hadapsar, Pune");

echo "<h1>Welcome to "  . COLLEGE_NAME . "</h1>";
print "<h2> Address : " . ADDRESS . "</h2>";

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
    <br>
    <label>Name : <?= $first_name ?> <?=$last_name?></label>
    <br>
    <label>Date of Birth : <?= $date_of_birth ?> </label>
    <br>
    <label>Email : <?= $email ?></label>
    <br>
    <label>Phone : <?= $phone ?></label>
  </div>
</body> -->
</html>