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
    <title>miniCRUD wijzigen</title>
  </head>
  <body background="images/pizza.jpg">
    <main>
      <div class="add-menu">
        <h1>Product wijzigen</h1>
        <form class="form" action="includes/menu-wijzigen.php?id=<?php echo $_GET['id']?>" method="POST">
          <label for="Naam">Naam Product</label>
          <input
            type="text"
            value="<?php echo $_GET['naam']?>"
            name="naam"
            placeholder="Naam"
            class="input_text"
          />
          <label>beschrijving</label>
          <textarea
            name="beschrijving"
            class="bericht"
            placeholder="Type hier uw bericht"
          ><?php echo $_GET['beschrijving']?></textarea>
          <label for="bericht">prijs</label>
          <input             
            value="<?php echo $_GET['prijs']?>"
            name="prijs" 
            type="number" 
            step="0.01" 
          />
          <button name="wijzigenSubmit" class="submit" type="submit">Verstuur</button>
        </form>
      </div>
    </main>
  </body>
</html>
