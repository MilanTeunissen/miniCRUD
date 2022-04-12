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
    <title>miniCRUD toevoegen</title>
  </head>
  <body background="images/pizza.jpg">
    <main>
      <div class="add-menu">
        <h1>Product toevoegen</h1>
        <form class="form" action="Includes/menu-toevoegen.php" method="POST">
          <label for="Naam">Naam Product</label>
          <input
            type="text"
            name="naam"
            placeholder="Naam"
            class="input_text"
          />
          <label>beschrijving</label>
          <textarea
            name="beschrijving"
            class="bericht"
            placeholder="Type hier uw bericht"
          ></textarea>
          <label for="bericht">prijs</label>
          <input name="prijs" type="number" step="0.01" />
          <button name="toevoegenSubmit" class="submit" type="submit">Verstuur</button>
        </form>
      </div>
    </main>
  </body>
</html>
