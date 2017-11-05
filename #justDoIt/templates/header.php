<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>#justDoIt</title>
        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
        </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    </head>
    <style>
        .hidden {
            display: none;
        }
        .error {
            color: red;
        }
    </style>
    <body>
    <header>
      <a href="../main"> <h1>#justDoIt</h1> </a>
      <div class="header">
        <?php if(isset($user)): ?>

          <?php
          if (strpos($_SERVER['HTTP_REFERER'], 'login') == true){
                  echo "<p> Welcome " . $user['username'] . "</p> <p> You are sucessfully logged in! </p>";
          } ?>

      <a href = "../account/profile.php"> Profile </a>
      <a href = "../account/logout.php"> Logout </a>

    <?php else: ?>

      <a href="../account/register.php">Register</a>
      <a href="../account/login.php">Login</a>

    <?php endif; ?>

    </div>

    </header>