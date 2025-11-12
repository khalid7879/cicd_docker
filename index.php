<!DOCTYPE html>
<html>
<head>
  <title>Student Enrollment Data</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
  <h2>Student Enrollment Database/h2>
  <form action="enroll.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" value="Enroll">
  </form>
</div>

<div class="container">
  <h2>Search Student</h2>
  <form action="search.php" method="get">
    <label for="search_name">Name:</label>
    <input type="text" id="search_name" name="search_name" required>

    <input type="submit" value="Search">
  </form>
</div>

</body>
</html>