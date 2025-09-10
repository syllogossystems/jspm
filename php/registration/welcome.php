<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); 
    exit;
}

require_once "db_connect.php"; // ✅ your CRUD functions

/***********************
 * Handle Form Actions
 ***********************/

// CREATE student
if (isset($_POST['create_student'])) {
    createStudent(
        $conn,
        $_POST['enrollment_number'],
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['dob'],
        $_POST['email'],
        $_POST['phone']
    );
}

// UPDATE student
if (isset($_POST['update_student'])) {
    updateStudent(
        $conn,
        $_POST['student_id'],
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone']
    );
}

// DELETE student
if (isset($_GET['delete_student'])) {
    deleteStudent($conn, $_GET['delete_student']);
}

// ADD marks
if (isset($_POST['add_marks'])) {
    addMarks(
        $conn,
        $_POST['student_id'],
        $_POST['subject'],
        $_POST['marks']
    );
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    .student-card {
      border: 1px solid #ccc; 
      padding: 15px; 
      margin-bottom: 15px; 
      border-radius: 10px; 
      background: #f9f9f9;
    }
    .marks { margin-left: 20px; }
    form { margin-top: 10px; }
    input, button { margin: 5px; padding: 5px; }
    .create-form { margin-bottom: 20px; border: 2px solid #4CAF50; padding: 10px; border-radius: 10px; }
    .mark-form { margin-left: 20px; background: #eef; padding: 10px; border-radius: 5px; }
  </style>
</head>
<body>
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
  <a href="logout.php">Logout</a>

  <h3>Create Student</h3>
  <form method="post" class="create-form">
    <input type="text" name="enrollment_number" placeholder="Enrollment No" required>
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="date" name="dob" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <button type="submit" name="create_student">Create</button>
  </form>

  <h3>All Students with Marks</h3>
  <?php
  $students = getAllStudents($conn);
  foreach ($students as $s) {
      echo "<div class='student-card'>";
      echo "<strong>{$s['first_name']} {$s['last_name']}</strong><br>";
      echo "Enrollment: {$s['enrollment_number']}<br>";
      echo "DOB: {$s['date_of_birth']}<br>";
      echo "Email: {$s['email']}<br>";
      echo "Phone: {$s['phone']}<br>";

      // Show marks
      $marks = getMarksByStudent($conn, $s['student_id']);
      if ($marks) {
          echo "<div class='marks'><strong>Marks:</strong><br>";
          foreach ($marks as $m) {
              echo "Subject: {$m['subject']} | Marks: {$m['marks']}<br>";
          }
          echo "</div>";
      } else {
          echo "<div class='marks'>No marks yet.</div>";
      }

      // Add new mark form
      echo "<form method='post' class='mark-form'>
              <input type='hidden' name='student_id' value='{$s['student_id']}'>
              <input type='text' name='subject' placeholder='Subject' required>
              <input type='number' name='marks' placeholder='Marks' min='0' max='100' required>
              <button type='submit' name='add_marks'>Add Marks</button>
            </form>";

      // Update student form
      echo "<form method='post'>
              <input type='hidden' name='student_id' value='{$s['student_id']}'>
              <input type='text' name='first_name' value='{$s['first_name']}' required>
              <input type='text' name='last_name' value='{$s['last_name']}' required>
              <input type='email' name='email' value='{$s['email']}' required>
              <input type='text' name='phone' value='{$s['phone']}' required>
              <button type='submit' name='update_student'>Update Student</button>
            </form>";

      // Delete student
      echo "<a href='?delete_student={$s['student_id']}' onclick=\"return confirm('Delete this student?')\">Delete Student</a>";

      echo "</div>";
  }
  ?>
</body>
</html>
