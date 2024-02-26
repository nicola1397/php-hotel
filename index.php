<?php require_once "./result.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP HOTEL MAIN</title>

    <!-- LINK BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- SCRIPT BOOTSRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  </head>
  <body>
    
    <form action="./index.php" method="GET">
      <div>
    <label for="star-select">Stelle:</label>

<select name="stars" id="star-select">
  <option value="">Scegli un'opzione</option>
  <option value="2+">2+ stelle</option>
  <option value="3+">3+ stelle</option>
  <option value="4+">4+ stelle</option>
</select></div>
<div>
<label for="parking">Parcheggio:</label>
<input type="radio" name="parking" id="yes" value="yes">Si</div>
<input type="radio" name="parking" id="no" value="no">No</div>
<input type="radio" name="parking" id="all" value="all">Mostra tutti</div>

</div>
      <button type="submit">INVIA</button>
    </form>

<div>
<table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Parcheggio</th>
          <th scope="col">Voto</th>
          <th scope="col">Distanza dal centro</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($filter_hotels as $hotel) : ?>
          <tr>
            <td><?= $hotel["name"] ?></td>
            <td><?= $hotel["description"] ?></td>
            <td><?= $hotel["parking"] ? 'true' : 'false' ?></td>
            <td><?= $hotel["vote"] ?></td>
            <td><?= $hotel["distance_to_center"] . " km" ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
</div>
   
  </body>
</html>
