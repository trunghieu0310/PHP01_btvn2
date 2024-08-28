<?php
$str = "Hello World! 123 @#$%^&*()";
$replacement = '+';
$result = preg_replace("/[^a-zA-Z0-9]/", $replacement, $str);
echo $result;
?>
