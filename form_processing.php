<?php

$inputNumWords = 0;

if (isset($_POST['numWords'])) {
    $inputNumWords = $_POST['numWords'];
  
};


if (isset( $_POST['add_special_char'])) {
    $inputAddSpecialChars =  $_POST['add_special_char'];
    echo 'add special chars!';
};

if (isset( $_POST['add_numbers'])) {
    $inputAddNumbers =  $_POST['add_numbers'];
    echo 'add #!';
};

var_dump($inputNumWords);
var_dump($inputAddSpecialChars);
var_dump($inputAddNumbers);

?>