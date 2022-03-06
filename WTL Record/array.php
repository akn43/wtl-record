<?php
  
$array = array( '6', '9', '13', '17', '29' );
  
echo 'Original array : ';
foreach ($array as $x) 
{
echo "$x ";
}
  
echo "\n";
  
$inserted_value = '11';
  
  
$position = 2;
  
  
array_splice( $array, $position, 0, $inserted_value );

  
echo "\n After inserting 11 in the array is : ";
foreach ($array as $x) 
{
echo "$x ";
}
?>