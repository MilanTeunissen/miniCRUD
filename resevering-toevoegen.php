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
    <main>
      <div class="reseveren">
        <h1>Resevering toevoegen</h1>
        <form
          class="form_reseveren"
          action="Includes/resevering-toevoegen-backend.php"
          method="POST"
        >
          <div class="naam-email">
            <input type="text" name="Naam" placeholder="Naam" />
            <input type="Email" name="email" placeholder="Email" />
          </div>
          <div class="aantal-datum-tijd">
            <input
              type="number"
              name="aantal"
              placeholder="Aantal"
              min="1"
              max="10"
            />
            <input type="Date" name="datum" />
            <input type="Time" name="tijd" />
          </div>
          <div class="bijzonderheden">
            <textarea
              class="reseveren_bijzonderheden"
              name="bijzonderheden"
              placeholder="Type hier mogelijk bijzonderheden"
            ></textarea>
          </div>
          <button name="reseveringToevoegenSubmit" class="submit" type="submit">
            Reseveren
          </button>
        </form>
      </div>
    </main>
  </body>
</html>
