<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <header>
      <h1>GAME COLLECTION MANAGER</h1>
      
      
    </header>


    <main class="body">
      <div class="background">
      <div class="login-container">
        <h1>create an account</h1>



    <form action="registerSubmit.php" method="POST">
      <input
        type="text"
        name="username"
        placeholder="Usersname"
        required
      /><br />

      <input type="email" name="email" placeholder="Email" required /><br />
      <input
        type="password"
        name="password"
        placeholder="Password"
        required
      /><br />
      <button type="submit">Register</button>
    </form>



    
    <div class="extras">
      <p>have an account? <a href="index.php">go to login</a></p>
    </div>

    </div>
    </div>

    </main>


    
  </body>
</html>
