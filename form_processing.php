<?php

$word_lib = array("Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipiscing", "elit", "Nulla", "accumsan", "tortor", "quis", "dignissim", "interdum", "Pellentesque", "in", "felis", "aliquam", "accumsan", "libero", "quis", "congue", "magna", "Sed", "rutrum", "nunc", "quis", "lectus", "egestas", "vestibulum", "Vestibulum", "ultricies", "orci", "et", "metus");

$special_chars_lib = array("@", "#", "$", "%", "&", "*");

$error_msg_num_GT5 = "You have entered a number greater than 5. Please enter a number between 0 and 5.";

$generated_pw = "";
$index = 0;

if (isset($_POST['numWords'])) {
    $inputNumWords = $_POST['numWords'];
    $inputNumWords *= 1;
    
    /*
    if($inputNumWords is null){
        //generate error msg
    }
    elseif($inputNumWords == 0){
        //generate error msg
    }
    elseif($inputNumWords > 5){
       //generate error msg
    }
    */
};

if (isset( $_POST['add_special_char'])) {
    $inputAddSpecialChars =  $_POST['add_special_char'];
};

if (isset( $_POST['add_numbers'])) {
    $inputAddNumbers =  $_POST['add_numbers'];
};

//  generate a random number to determine which word to pick from our
//  word library and concatenate values to $generated_pw
for ($i = 1; $i <= $inputNumWords; $i++) {
    $index = rand(0, 34);
    $generated_pw = $generated_pw . $word_lib[$index] .  " - ";
}

var_dump($inputNumWords);
var_dump($inputAddSpecialChars);
var_dump($inputAddNumbers);
var_dump($generated_pw);

?>