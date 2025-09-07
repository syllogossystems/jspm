<?php 
    // Constant for site/school name (cannot change)
    const SCHOOL_NAME = "Syllogos Systems"; 

    // Student variables (can change)
    $studentName = "Prabhat Kumar";
    $age = 20;
    $course = "B.Tech Computer Science";
    $email = "prabhat.librian@gmail.com";
    $grade = "A";
    $gpa = 8.75;

    // --- Using echo ---

    // 1. Echo with concatenation (.)
    echo "<h1>Welcome to " . SCHOOL_NAME . "</h1>";

    // 2. Echo with multiple values
    echo "<h2>Student Information Page</h2>";
    echo "Name: ", $studentName, "<br>";
    echo "Age: ", $age, "<br>";
    echo "Course: ", $course, "<br>";
    echo "Email: ", $email, "<br>";

    // 3. Echo with interpolation (inside double quotes)
    echo "Student $studentName has grade $grade<br>";

    // 4. Echo with HTML formatting
    echo "<p style='color:blue;'>Course enrolled: $course</p>";

    // 5. Echo with escape characters
    echo "She said: \"PHP is awesome!\"<br>";

    // --- Using print ---

    // 6. Print with concatenation
    print "Grade: " . $grade . "<br>";

    // 7. Print with interpolation
    print "Email registered: $email<br>";

    // 8. Print returns a value (can be used in expressions)
    $x = (print "Using print inside expression<br>");
    echo "Return value of print is: $x<br>";  // Always 1

    // --- Variables vs Constants ---

    // 9. Variables can change
    $age = 21;
    echo "Updated Age: $age<br>";

    // 10. Constants cannot change (uncommenting next line gives error)
    // SCHOOL_NAME = "Another School";

    // --- Extra: Using printf for formatting ---
    printf("Student GPA: %.2f<br>", $gpa);

    // --- Closing Messages ---
    echo "<p>Thank you for visiting " . SCHOOL_NAME . ".</p>";
    print "<p>Generated using PHP variables, constants, echo & print.</p>";
?>
