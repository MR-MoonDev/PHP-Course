<!-- Save this as form.html -->
<!DOCTYPE html>
<html>

<head>
  <title>Simple Form</title>
</head>

<body>
  <h2>Simple Form</h2>
  <form action="./Topic8_Form_Post2.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female">
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>