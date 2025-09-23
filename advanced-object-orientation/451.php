<?php
class Vehicle
{
  public function __construct(private $color, private $brand) {}

  public function __destruct()
  {
    echo "strap the $this->brand<br>";
  }
}

class FileHandler
{
  private $file_handle;

  public function __construct(private string $file_name)
  {
    $this->file_handle = fopen($file_name, "w"); // adds the file if it does not exist

    if ($this->file_handle) {
      echo "Open file<br>";
    }
  }

  public function write_data($data)
  {
    if (fwrite($this->file_handle, $data)) {
      echo "Write file<br>";
    } else {
      echo "Error writing file<br>";
    }
  }

  public function __destruct()
  {
    if ($this->file_handle) {
      fclose($this->file_handle);
      echo "Close file<br>";
    }
  }
}

$audi = new Vehicle("black", "audi");
$bmw = new Vehicle("blue", "bmw");

unset($audi);
echo "Audi is gone now<br>";

$file = new FileHandler("451.txt");
$file->write_data("Hello World");
