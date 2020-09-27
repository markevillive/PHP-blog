<?php
echo "<h1>МОЙ ПЕРВЫЙ БЛОГ</h1>";
//echo time();
function add($param1, $param2){
    return $param1 + $param2;
}
$a = $_GET["a"];
$b = $_GET["b"];

//echo "a + b = ".($a + $b);
echo add($a,$b)."<br>";

for ($i =0;$i<10;$i++){
    echo $i."<br>";
}

?>
