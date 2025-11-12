<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
  <h2>Search Results</h2>
  <?php
  $search_name = $_GET['search_name'];
  $sql = "SELECT * FROM students WHERE name LIKE '%$search_name%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</div>

</body>
</html>