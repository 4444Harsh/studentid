<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the student ID from the form
  $studentID = $_POST["student_id"];

  // Replace "your_email@example.com" with your actual email address
  $to = "guptaharshbly.com";
  $subject = "Student ID";
  $message = "The student ID is: " . $studentID;

  // Send the email
  if (mail($to, $subject, $message)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send the email.";
  }
}
?>
