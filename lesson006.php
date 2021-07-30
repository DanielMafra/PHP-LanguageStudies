<?php
//foreach

$about = array("name" => "Daniel", "age" => 24, "height" => 1.71);
$colors = ['blue', 'yellow', 'green'];

foreach($colors as $color) {
  echo $color;
}

foreach($about as $index => $info) {
  echo $index.":".$info;
}

?>