<?php
// Include the database connection file
include './dbconn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the username and password from POST request
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Prepare the SQL statement to prevent SQL injection
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $username, $password);

  // Execute the statement
  $stmt->execute();

  // Get the result
  $result = $stmt->get_result();

  // Check if a matching record was found
  if ($result->num_rows > 0) {
    // Username and password exist in the database, redirect to final.php
    header("Location: ./final.php");
    exit();
  } else {
    // Username and/or password do not exist in the database, throw an error
    echo "Error: Invalid username or password.";
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/login.css">
    <title>LogIn</title>

  </head>

  <body>
    <div class="sectionContainer">
      <div class="container">
        <h2 class="logoName">Login</h2>
        <form method="post" action=" " id="loginForm">
          <div class="form-control">
            <input type="text" id="username" name="username" required>
            <label for="username">Username</label>
          </div>
          <div class="form-control">
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
          </div>
          <div>
            <button type="submit" id="btn" value="Login">LogIn</button>
          </div>
        </form>
      </div>
    </div>
  </body>

</html>
