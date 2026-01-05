<?php



/**
 * ------------------------------------------------------------
 * Project Name : Game Collection Manager
 * File Name    : index.php
 * Author       : Your Name
 * Created On   : 2025-12-15
 * Description :
 *   This project is a web-based game collection manager that
 *   allows users to create, view, update, and delete games
 *   from a personal library. It demonstrates full CRUD
 *   functionality with a clean separation between frontend
 *   and backend logic.
 *
 * Technologies :
 *   - PHP 8+
 *   - MySQL
 *   - HTML / CSS / JavaScript
 *
 * Purpose :
 *   The purpose of this project is to demonstrate backend
 *   development skills, secure database interaction using
 *   prepared statements, and structured code organization
 *   for a real-world web application.
 *
 
 *Demo Access :
 *    A pre-configured demo account is available for reviewers
 *   to explore the application without creating a new account.
 *
 *   Demo Credentials:
 *   - Email: user@gmail.com
 *   - Password: user
 * 
 * ------------------------------------------------------------
 */








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
        <h1>login</h1>

    <?php 
     if(isset($_SESSION['error'])):
    ?>
    <p id="error" ><?= $_SESSION['error']; ?></p>
    <?php unset($_SESSION['error']); ?>
    <?php  endif; ?>

    <form action="loginSubmit.php" method="POST">
      <input type="email" name="email" placeholder="Email" required /><br />
      <input
        type="password"
        name="password"
        placeholder="Password"
        required
      /><br />
      <button type="submit">Login</button>
      <br />
      <div class="extras">
        <p>
        don't have an account? <a href="register.php">create an account</a>
      </p>
      </div>

    </form>
       </div>
    </div>

    </main>


    
  </body>
</html>
