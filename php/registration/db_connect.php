<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/**
 * Get all users from the database
 * @return array
 */
function getAllUsers($conn) {
    $users = [];

    $sql = "SELECT id, username, password, created_at FROM users ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    return $users;
}

/***********************
 * STUDENTS CRUD
 ***********************/

/**
 * Create a new student
 */
function createStudent($conn, $enrollment_number, $first_name, $last_name, $dob, $email, $phone) {
    $sql = "INSERT INTO students (enrollment_number, first_name, last_name, date_of_birth, email, phone) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $enrollment_number, $first_name, $last_name, $dob, $email, $phone);
    return $stmt->execute();
}

/**
 * Get all students
 */
function getAllStudents($conn) {
    $students = [];
    $sql = "SELECT * FROM students ORDER BY student_id ASC";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }
    return $students;
}

/**
 * Update student
 */
function updateStudent($conn, $student_id, $first_name, $last_name, $email, $phone) {
    $sql = "UPDATE students SET first_name=?, last_name=?, email=?, phone=? WHERE student_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $first_name, $last_name, $email, $phone, $student_id);
    return $stmt->execute();
}

/**
 * Delete student (also deletes marks due to foreign key cascade)
 */
function deleteStudent($conn, $student_id) {
    $sql = "DELETE FROM students WHERE student_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    return $stmt->execute();
}


/***********************
 * MARKS CRUD
 ***********************/

/**
 * Add marks for a student
 */
function addMarks($conn, $student_id, $subject, $marks) {
    $sql = "INSERT INTO marks (student_id, subject, marks) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $student_id, $subject, $marks);
    return $stmt->execute();
}

/**
 * Get marks of a student
 */
function getMarksByStudent($conn, $student_id) {
    $marks = [];
    $sql = "SELECT * FROM marks WHERE student_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $marks[] = $row;
    }
    return $marks;
}

/**
 * Update marks for a subject
 */
function updateMarks($conn, $mark_id, $marks) {
    $sql = "UPDATE marks SET marks=? WHERE mark_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $marks, $mark_id);
    return $stmt->execute();
}

/**
 * Delete marks record
 */
function deleteMarks($conn, $mark_id) {
    $sql = "DELETE FROM marks WHERE mark_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $mark_id);
    return $stmt->execute();
}

// $users_data = getAllUsers($conn);
// // Loop through and display users
// foreach ($users_data as $user) {
//     echo "Username: " . $user['username'] . " | Password: " . $user['password'] . "<br>";
// }

// // READ students
// $students = getAllStudents($conn);
// foreach ($students as $s) {
//     echo "Student: {$s['first_name']} {$s['last_name']} ({$s['enrollment_number']})<br>";
// }

// // READ marks
// $marks = getMarksByStudent($conn, 1);
// foreach ($marks as $m) {
//     echo "Subject: {$m['subject']} | Marks: {$m['marks']}<br>";
// }
?>
