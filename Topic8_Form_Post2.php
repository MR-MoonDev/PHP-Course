<!-- Save this as submit.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $gender = htmlspecialchars($_POST['gender']);
  echo "<h2>Form Submitted</h2>";
  echo "Name: " . $name . "<br>";
  echo "Email: " . $email ."<br>";
   echo "Gender: " . $gender."<br>";
} else {
  echo "No data submitted.";
}
?> 
