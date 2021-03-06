<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Asap&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>miniCRUD reseveren</title>
  </head>
  <body background="images/pizza.jpg">
    <?php
      include ('includes/header.php');
    ?>
    <main>
      <div class="inlog_block">
            <H1>Login</H1>
            <form class="form_inlog" action="includes/login.php" method="POST">
                <div class="inlog_style">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="username">
                    <p>Password</p>
                    <input type="text" name="wachtwoord" placeholder="wachtwoord">
                </div>
                <button class="inlog_button" name="inlogSubmit">Login</button>
            </from>
      </div>
    </main>
    <?php
      include ('includes/footer.php');
    ?>
  </body>
</html>