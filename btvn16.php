<?php
$str = 'this a test string';
$str1 = 'string';
$arr = explode(" ", $str); // Correct the order of arguments in explode
if ($arr[count($arr) - 1] != $str1) {
    echo "Chuỗi str1 không tồn tại trong chuỗi";
} else {
    echo "Chuỗi str1 tồn tại trong chuỗi";
}
?>
