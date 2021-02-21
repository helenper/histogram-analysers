<?php
  include_once "header.php";
 ?>

<body>
  <main>

    <div class="page_margins">

    <h2>Welcome to the Masterclass histogram analysis tool</h2>



    <?php
      if (isset($_SESSION['userName'])) {
        if ($_SESSION['userPrivileges'] != 'student') {
          echo "<p> You are logged in! Navigate the page from the menu found on the top of the page.</p>";

        }
        else {
          echo "<p> Welcome to masterclass!</p>";
        }
      }
      else {
        echo "<p>Please sign in with your given username and password:</p>";

        if ($_GET['login'] == 'failed') {
          echo "Wrong username or password. Please try again.";
        }

        // else ....
        //echo "<p> You are logged out!</p>";

        echo '<form action="includes/login.inc.php" method="POST">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
        </form>';


      }


    ?>

  <!-- </div>-->


  </div>

</main>
</body>
