<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Basic HTML page template" />
    <title>Add game</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
   
  </head>
  <body>
    <!-- Header -->
    <header>
      <h1>GAME COLLECTION MANAGER</h1>
      <nav class="nav">
        
          <a href="addGame.php">HOME</a>
          <a href="credit.html">ABOUT</a>
          <a href="work.html">LIBRARY</a>
          <a id="profil" href="work.html">PROFIL</a>
          
        
      </nav>
      <nav class="logout-nav">
        <a id="logout" href="logout.php">LOGOUT</a>

      </nav>
    </header>

    <!-- Main Content -->
    <main>
      <section class="featured">
        <h2>
          Welcome,
          <?php echo htmlspecialchars($_SESSION['username']); ?>
        </h2>
        <h3>
           user id:
          <?php echo htmlspecialchars($_SESSION['user_id']); ?>

        </h3>
        <p>Explore your game collection.</p>

        <!-- BUTTON -->
        <button id="showFormBtn">Add New Game</button>
      </section>

      <section>
       

        
          <!-- FORM -->
          <div class="form-container" id="formContainer">
            <form id="gameForm"  enctype="multipart/form-data">
              <label>Game Name</label>
              <input type="text" id="name" required />

              <label>Platform</label>
              <input type="text" id="platform" required />

              <label>Game Picture</label>
              <input type="file" id="image" name="image" accept="image/*"  />

              <label>Note</label>
              <textarea id="note"></textarea>

              <button type="submit">Add Game</button>
            </form>
          </div>
        
      </section>
      <section>
        <div class="collection" id="collection"></div>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <p>&copy; 2025 game collection manager.</p>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>
