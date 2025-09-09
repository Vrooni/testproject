<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 276</title>
</head>

<body>
  <?php
  class Benutzer
  {
    public $profil;

    public function __construct($profil = null)
    {
      $this->profil = $profil;
    }
  }

  class Profil
  {
    public $name;

    public function __construct($name = null)
    {
      $this->name = $name;
    }
  }


  $benutzer = new Benutzer();
  var_dump($benutzer->profil->name);
  var_dump($benutzer?->profil?->name);
  echo $benutzer->profil->name ?? "Standardwert";
  echo $benutzer?->profil?->name ?? "Standardwert";
  $benutzer = new Benutzer(new Profil("Markus"));
  echo $benutzer?->profil?->name ?? "Standardwert";
  ?>
</body>

</html>