<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/view/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <title>Pokedex</title>
</head>

<body>
  <div class="container">
    <h1>Welcome to Pokedex</h1>

    <form action="" method="post">
      <input type="text" name="pokemon" placeholder="Search Pokemon">
      <button type="submit">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </form>

    <a href="https://pokeapi.co/" target="_blank" rel="noopener noreferrer">Pokedex API</a>

    <?php if ($pokemon["error"]): ?>
      <img class="sad-poke" src="src/public/sad_pokemon.png" alt="sad pokemon">
      <h3><?php echo $pokemon["error"]; ?></h3>
    <?php elseif ($pokemon): ?>
      <img class="sprite" src="<?php echo $pokemon["sprites"]["front_default"]; ?>" alt="Pokemon picture">
    <?php endif; ?>
    <h3 class="info"><?php echo $pokemon["name"]; ?></h3>
  </div>
</body>

</html>