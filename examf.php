<!DOCTYPE html>
<html>
<body>

<?php
class bike {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My bike is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new bike("black", "BMW");
echo $myCar -> message();
echo "<br>";
$myCar = new bike("red", "SUZUKI");
echo $myCar -> message();
?>

</body>
</html>
