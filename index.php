<!Doctype html>
<html>

<head>
    <title>Password Generator</title>
    <?php require('form_processing.php') ?>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>
    <h2>Password Generator</h2>
    

    <form class="pure-form pure-form-stacked" action="index.php" method="POST" >
        <fieldset>
            <div class="pure-control-group">
                <label for="words">Number of Words (Max 5)</label>
                <input id = "words" name="numWords" type="text" placeholder="Number of words (max 5)" maxlength = "1">
            </div>

            <div class="pure-controls">
                <label for="cb1" class="pure-checkbox">
                    <input id="cb1" type="checkbox" name ="add_special_char" value = "spcl"> Add special characters
                </label>

                <label for="cb2" class="pure-checkbox">
                    <input id="cb2" type="checkbox" name ="add_numbers" value ="addNum"> Add numbers
                </label>

                <button type="submit" class="pure-button pure-button-primary">Generate Password</button>
            </div>
        </fieldset>
    </form>
</body>

</html>