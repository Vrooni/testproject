<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/views/home.css">
  <title>Document</title>
</head>

<body>
  <div class="title-container">
    <h1>TODAY'S PLAN</h1>
    <h2>ORGANIZE YOUR DAY</h2>
  </div>

  <div class="form-container">
    <form action="" method="post">
      <h3>I NEED TO DO . . .</h3>
      <input type="text" name="name" id="name" placeholder="Todo title">
      <textarea name="descr" id="descr" placeholder="Todo description"></textarea>
      <button type="submit" name="create">Create</button>
    </form>
  </div>

  <div class="todos-container">
    <div class="todos-container2">
      <h3> </h3>
      <h3>TODO</h3>
      <h3>DESCRIPTION</h3>
      <h3> </h3>

      <?php
      foreach ($cards as $card) {
        echo $card;
      }
      ?>
    </div>
</body>

</html>