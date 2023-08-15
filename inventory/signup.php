<?php
    require_once "database/dbcon.php";

    //if (!empty($_POST)){}
        if (isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            $sql="INSERT INTO credentials(username, password) VALUE ('$username', '$password')";
            $sql1="SELECT * FROM credentials WHERE username='$username'";
            $result=mysqli_query($conn, $sql1);
            $present=mysqli_num_rows($result);
do{
   if(empty($username) || empty($password)){
    echo "<script>alert('All Fields Are REquired!!')</script>";
    break;
   } elseif($present>0){
    echo "<script>alert('Username already exists');</script>";
    break;
   }elseif($conn->query($sql) === TRUE){
    echo "<script>alert('Account Created');</script>";
   echo "<script>document.location='login.php';</script>";
    break;
   }else{
    echo "<script>alert('Something Went Wrong!!');</script>";
    break;
   }
} while(false);
           
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
    <title>Sign Up</title>
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
<main class="form-signin">
  <form method="POST">
  <img class="my-5 form-control" src="resources/images/mycompass-logo.png">
    <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <a href="login.php">Log In</a>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" style="background-color: #0C293A;">Sign up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>
 <!--       <h2>SIGN UP</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
       </div> 
    </div>
-->
</form>
</body>
</html>