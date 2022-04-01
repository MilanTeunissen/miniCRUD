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
            <H1>inloggen</H1>
            <form class="form_inlog" action="../actions/login.php" method="post">
                <div class="inlog_style">
                    <?php if(isset($_GET['error'])) { ?>
                      <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <p>Username</p>
                    <input type="text" name="username" placeholder="username">
                    <p>Wachtwoord</p>
                    <input type="text" name="wachtwoord" placeholder="wachtwoord">
                </div>  
            </from>
          <button class="inlog_button">Login</button>
      </div>
    </main>
    <?php
      include ('includes/footer.php');
    ?>
  </body>
</html>