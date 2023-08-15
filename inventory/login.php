<?php 
    require_once "database/dbcon.php";
    if(isset($_POST['submit'])){
// Get input from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Sanitize input to prevent SQL injection
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Hash the password (if using password hashing)
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL query
$sql = "SELECT * FROM credentials  WHERE username='$username' ";
// Execute query
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Verify the password (if using password hashing)
    // if (password_verify($password, $row['password'])) {
    if ($password === $row['password']) {
        // Successful login
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        header("Location: index.php"); // Redirect to a secure page after successful login
        exit();
        //echo "Login successful. Welcome, $username!";
        //echo"<script>document.location='index.php';</script>";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

        .form-signin .checkbox {
        font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }

    
    </style>

</head>
<body>
<!--
<form class="container justify-content-center" style="width:50%;">

    <div class="container my-5">
        <h2>LOG IN</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="mb-3">
            <a href="signup.php" class="btn btn-success">Sign up</a>
            <button type="submit" class="btn btn-primary">Submit</button>
       </div> 
    </div>
</form>
-->

<main class="form-signin">
  <form method="POST">
    <img class="my-5 form-control" src="resources/images/mycompass-logo.png">
    <h1 class="h3 mb-3 fw-normal text-center">Log In</h1>

    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" style="background-color: #0C293A;">Log in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    <a href="signup.php">Sign up</a>
  </form>
</main>

</body>
</html>