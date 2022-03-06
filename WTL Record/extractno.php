<?php
    $string = '$ 9000';
    echo "The extracted numbers from string are :";
    echo "\n<br/>";
    echo preg_replace("/[^0-9]/", '', $string);
    echo "\n<br/>";
      
    $string2 = '$ 7898';
    echo preg_replace("/[^0-9\.]/", '', $string2);
    echo "\n<br/>";
      
    $string3 = 'Mike has 10 red and 23 blue balls';
    echo preg_replace("/[^0-9]/", '', $string3);
    echo "\n";
?>