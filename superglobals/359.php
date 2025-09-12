<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 357</title>
</head>

<body>
  <?php
  if ($_FILES) {
    print_r($_FILES);
  }
  ?>
  <!-- enctype important -->
  <form action="359.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploaded-file">
    <button type="submit">Send</button>
  </form>
</body>

</html>