<!Doctype html>
<html>

<head>
    <title>Password Generator</title>
    <?php require('form_processing.php') ; ?>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type= "text/css" href="style.css">
</head>

<body>
    <div class="container">
    <h2>Password Generator</h2>

    <form class="pure-form pure-form-stacked" action="index.php" method="POST" >
        <?php
            if(isset($generated_pw) && $generated_pw) {
                echo "<p id=\"pw_generated\">Your Password is: ",$generated_pw,"</p>\n\n";
            }
        ?>
        
        <fieldset>
            <div class="pure-control-group">
                <p id="instructions">Please enter the number of words you'd like in your password in the field below. If you would like to add special characters or numbers to the password, select the appropriate checkbox.</p>
                <label for="words">Number of Words (Max 5)</label>
                <input id = "words" name="numWords" type="text" placeholder="Number of words (max 5)" maxlength = "1">
                <?php
                    if(isset($display_error_msg) && $display_error_msg) {
                        echo "<p id=\"error_display\">* ",$display_error_msg,"</p>\n\n";
                    }
                ?>
            </div>

            <div class="pure-controls">
                <label for="cb1" class="pure-checkbox">
                    <input id="cb1" type="checkbox" name ="add_special_char" value = "addSpcl"> Add special characters
                </label>

                <label for="cb2" class="pure-checkbox">
                    <input id="cb2" type="checkbox" name ="add_numbers" value ="addNum"> Add numbers
                </label>

                <button type="submit" class="pure-button pure-button-primary" name ="generate_pw">Generate Password</button>
            </div>
        </fieldset>
    </form>
    </div>
</body>

</html>