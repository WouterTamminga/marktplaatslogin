<!doctype html>

<html>
  <head>
  <title></title>
  <!--<link rel="stylesheet" href="style.css">-->
  </head>
  <body>



  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Port</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contact</a></li>
        </ul>
        <div>
          <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="username/email">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="login-submit">Login</button>

          </form>
        <a href="signup.php">Sign up</a>

        <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">logout</button>
        </form>

        </div>
    </nav>



  </header>






  </body>


  </html>






