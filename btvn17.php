<?php
$str = 'this a test string';
$str1 = 'string';
$arr = explode(" ", $str); // Correct the order of arguments in explode
foreach($arr as $x){
  if($x == $str){
    echo "chứa chuỗi";
  }
  else{
    echo "không chứa chuỗi";
  }
}
?>
