<?php
//array and object

$cars = array("ferrari", 12, 19.5, true);
var_dump($cars);

class Client {
  public $name;
  public function assignName($name) {
    $this->$name = $name;
  }
}

$client = new Client();
$client->assignName("Daniel");
var_dump($client);

?>