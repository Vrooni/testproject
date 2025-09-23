<?php
trait Trait1
{
  private $name;

  public function print()
  {
    echo "Hello $this->name<br>";
  }

  public function set_name($name)
  {
    echo "Set 1<br>";
    $this->name = $name;
  }
}

trait Trait2
{
  private $name;

  public function print()
  {
    echo "Hai $this->name<br>";
  }

  public function set_name($name)
  {
    echo "Set 2<br>";
    $this->name = $name;
  }
}

class Test
{
  use Trait1, Trait2 {
    Trait1::print insteadof Trait2;
    Trait1::set_name insteadof Trait2;
    Trait1::set_name as set_name_1;
    Trait2::set_name as set_name_2;
  }
}

$test = new Test;
$test->set_name_1("Jonas");
$test->print();
$test->set_name_2("Hildegard");
$test->print();
