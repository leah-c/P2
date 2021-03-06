<?php

//  initializing password library components
$word_lib = array("Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipiscing", "elit", "Nulla", "accumsan", "tortor", "quis", "dignissim", "interdum", "Pellentesque", "in", "felis", "aliquam", "accumsan", "libero", "quis", "congue", "magna", "Sed", "rutrum", "nunc", "quis", "lectus", "egestas", "vestibulum", "Vestibulum", "ultricies", "orci", "et", "metus");

$special_chars_lib = array("@", "#", "$", "%", "&", "*", "+", "/", "?", "!");

//  initializing vars to be used while generating pw
$generated_pw = "";
$num_elements_special_chars_lib = count($special_chars_lib)-1;
$num_elements_word_lib = count($word_lib)-1;

$inputNumWords = 0;

//  initializing error messages
$empty_value_error = "Please enter the number of words you would like in the password!";
$non_numeric_error = "Please enter a numeric value.";
$out_of_range_error = "Please enter a number between 1 and 5.";
$display_error_msg = "";

//  initializing flags
$addSpecialChars = false;
$addNumbers = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //================================================
    //  input validation
    //  check to see if input is empty, non-numeric
    //  or out of range
    //================================================
    if ((isset($_POST['numWords'])) && ($_POST['numWords'] == "")){

        $display_error_msg =  $empty_value_error;
    }
    
    elseif (! is_numeric($_POST['numWords'])){
        $display_error_msg =  $non_numeric_error;
    }
    
    elseif(intval($_POST['numWords'] > 5 || intval($_POST['numWords'] < 1 ))){
        $display_error_msg =  $out_of_range_error;   
    }
    else{
        $inputNumWords = (($_POST['numWords']) * 1);
    }
    
        
    //================================================
    //  additional pw selections
    //  check to see if user chose to add special
    // characters or numbers to the password
    //================================================    
    if (isset( $_POST['add_special_char'])) {
        $addSpecialChars = true;

    };

    if (isset( $_POST['add_numbers'])) {
        $addNumbers = true;
  
    };
    
  } // end if ($_SERVER["REQUEST_METHOD"] == "POST")


    //================================================
    //  generate a random number to determine which word 
    //  to pick from our word library and concatenate 
    //  values to $generated_pw
    //================================================
    for ($i = 1; $i <= $inputNumWords; $i++) {
        $index = rand(0, $num_elements_word_lib);
        $generated_pw = $generated_pw . $word_lib[$index] .  " ";

        //  if user elected to add special characters then generate a random
        //  number to determine which character to pick from our special char lib
        //  and concatenate    
        //if ($_POST['add_special_char'] == "addSpcl") {
        if ($addSpecialChars) {
            $spcl_char_index = rand(0,$num_elements_special_chars_lib);
            $generated_pw = $generated_pw . $special_chars_lib[$spcl_char_index];
        }

        //  if user elected to add numeric values then generate a random
        //  number and concatenate
        if ($addNumbers) {
            $rand_num = rand(0,201);
            $generated_pw = $generated_pw . $rand_num;
        }
    }   // end for loop

?>