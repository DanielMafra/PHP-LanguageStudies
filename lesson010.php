<?php
//for & foreach

for($counter = 0; $counter <= 10; $counter++):
  echo "Counter is $counter";
endfor;

$colors = array("red", "yellow", "green");

foreach($colors as $color):
  echo "Color is $color";
endforeach;

?>