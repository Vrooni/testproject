<?php
abstract class Fahrzeug
{
  public abstract function fahre();
}

interface Inspektion
{
  public function inspektionDurchführen();
}

class Auto extends Fahrzeug implements Inspektion
{
  private static $anzahlAutos = 0;
  private const MAX_GESCHWINDIGKEIT = 250;

  public function __construct(public readonly string $vin)
  {
    self::$anzahlAutos++;
  }

  public function fahre()
  {
    echo "brumm brumm...<br>";
  }

  public function inspektionDurchführen()
  {
    echo "Inspect car<br>";
  }

  public static function zeigeAnzahlAutos()
  {
    echo "Es gibt " . self::$anzahlAutos . " Autos<br>";
  }

  public function get_max_geschwindigkeit()
  {
    return self::MAX_GESCHWINDIGKEIT;
  }
}


$hundii = new Auto("A-AL-95");
$hundii->inspektionDurchführen();
$hundii->fahre();
echo $hundii->get_max_geschwindigkeit() . " km/h <br>";
$audi = new Auto("AU-DI-2");
Auto::zeigeAnzahlAutos();
