<?php

include './dbconn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $password);

  if ($stmt->execute()) {
    header("Location: ./login.php");
    exit();
  } else {
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/login.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <title>Sign Up</title>

  </head>

  <body>
    <div class="container">
      <h2 class="logoName">Sign Up</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="loginForm">
        <div class="form-control">
          <input type="text" id="username" name="username" required>
          <label for="username">Username</label>
        </div>
        <div class="form-control">
          <input type="password" id="password" name="password" required>
          <label for="password">Password</label>
        </div>
        <div>
          <button type="submit" id="btn" value="Sign Up">Sign Up</button>
        </div>
      </form>
    </div>

  </body>

</html>
