<?php
echo "PHP [Arrays] Exercise [1] <br>\n";
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);
echo "<br>\n";

echo "PHP [Arrays] Exercise [2] <br>\n";
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[1];
echo "<br>\n";

echo "PHP [Arrays] Exercise [3] <br>\n";
echo '$age = array ("Peter"=>"35", "Ben"=>"37", "Joe"=>"43")';
echo "<br>\n";

echo "PHP [Arrays] Exercise [4] <br>\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age['Ben'] . " years old.";
echo "<br>\n";

echo "PHP [Arrays] Exercise [5] <br>\n";
echo 'foreach($age as $x => $y) {
echo "Key=" . $x . ", Value=" . $y;
}';
echo "<br>\n";

echo "PHP [Arrays] Exercise [6] <br>\n";
$colors = array("red", "green", "blue", "yellow"); 
sort($colors);
foreach ($colors as $key => $value) {
   echo "$value ".  "\n";
}    
echo "<br>\n";

echo "PHP [Arrays] Exercise [7] <br>\n";
$colors = array("red", "green", "blue", "yellow"); 
rsort($colors);
foreach ($colors as $key => $value) {
     echo "$value ".  "\n";
}
echo "<br>\n";

echo "PHP [Arrays] Exercise [8] <br>\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $key => $value) {
  echo "$value ".  "\n";
}
?>