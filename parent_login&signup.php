<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Sign in & Sign up Form</title>
    <style>
      .style{
				color: #000000;
				border-bottom: 2px solid #8f1b1c;
        background: #fadadb;
				padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <?php
	include("php/connection.php");
    if(!empty($_POST['login']))
    {
      $user_name=$_POST['user_name'];
      $password=$_POST['password'];
      $query="SELECT * FROM parent_tbl WHERE user_name='$user_name' AND password='$password'";
      $result=mysqli_query($con,$query);
      $count=mysqli_num_rows($result);
      if($count>0)
      {
        echo "Login Successful!";
        header("Location: ./admin_index.php");
      }
      else
      {
        echo "<p class='style'>Wrong username or password!";
      }
    }
?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <a href="forgotpassword.php">Forgot password?</a>
            <input type="submit" name="login" value="Login" class="btn solid" />
          </form>
          <form action="php/parent_signup.php" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First Name" name="first_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last Name" name="last_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Middle Name" name="middle_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-map-marker"></i>
              <input type="text" placeholder="Address" name="address"/>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Phone Number" name="phone_num"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" class="btn" value="Signup"/>
          </form>
          <a href="home.php" class="back"><i class="fas fa-arrow-circle-left"></i>Go back</a>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't have an account?</h3>
            <br>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="admin/b1.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account?</h3>
            <br>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="admin/b2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/login&signup_style.js"></script>
  </body>
</html>