<?php

$array = array("Antony", "Kevin",
            "1", "2","3");  
  
echo "\nCount first array elements: " . count($array) . "\n"; 
  
$array = array(
  'names' => array("Antony", "Kevin"), 
  'rank' => array('1', '2', '3')
); 
  
echo "\nRecursive count: " . count($array, 1) . "\n"; 
echo "\nNormal count: " . count($array, 0); 
  
?>