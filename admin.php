-<!DOCTYPE html>
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
    <title>miniCRUD Admin</title>
  </head>
  <body background="images/pizza.jpg">
    <main>
        <div class="base-admin">
          <a href="index.php"><button>Home</button></a>
          <div class="admin-pagina">
            <div class="add-modify-delete-menu">
            <h1>Menu</h1>
            </div>
              <div class="admin_menu">
                <table>
                    <tr>
                        <th>gerecht</th>
                        <th>bescrhijving</th>
                        <th>Prijs</th>
                        <th><button>toevoegen</button></th>
                    </tr>
                    <?php include("includes/table.php") ?>
                </table>
              </div> 
              <div class="add-modify-delete-resevering">
            <h1>Reseveringen</h1>
            </div>
              <div class="admin_resevering">
                <table>
                    <tr>
                        <th>Naam</th>
                        <th>E-mail</th>
                        <th>aantal</th>
                        <th>datum</th>
                        <th>tijdstip</th>
                        <th>bijzonderheden</th>
                        <th><button>toevoegen</button></th>
                    </tr>
                    <?php include("includes/resevering.php") ?>
                </table>
              </div> 
          </div>
        </div>
    </main>
  </body>
</html>