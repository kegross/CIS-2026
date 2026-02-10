<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>My Example Web Page</title>
</head>
<body>
    <main>
        <form action="confirmation.php" method="POST">
            <div>
                <label for="email-id">Enter your email:</label>
                <input type="email" name="email-input" id="email-id" />
            </div>

            <div>
                <label for="password-id">Enter your password:</label>
                <input type="password" name="password-input" id="password-id" />
            </div>

            <fieldset>
                <legend>What is your age?</legend>
                <?php
                    for($i=10;$i<=60;$i = $i + 10){
                        $end = $i;
                        $start = $end - 9;
                        print("<div><input type='radio' name='age-radio-simple-loop' id='age-$i' value='$i'><label for='age-$i'>$start-$end</label></div>");
                    }
                ?>
                <div><input type='radio' name='age-radio-simple-loop' id='age-7' value='7'><label for='age-7'>61+</label></div>
            </fieldset>

            <fieldset>
            <legend>
            What colors do you like?
            </legend>
            <div>
                <input type="checkbox" name="color-choice[]" id="color-red" value="red"/> 
                <label for="color-red">Red</label>
            </div>
            <div>
                <input type="checkbox" name="color-choice[]" id="color-yellow" value="yellow"/> 
                <label for="color-yellow">Yellow</label>
            </div>
            <div>
                <input type="checkbox" name="color-choice[]" id="color-blue" value="blue"/> 
                <label for="color-blue">Blue</label>
            </div>
            </fieldset>

            <fieldset>
            <legend>
            What is your favorite color?
            </legend>
            <div>
                <input type="radio" name="color-favorite" id="color-fav-red" value="red"/> 
                <label for="color-fav-red">Red</label>
            </div>
            <div>
                <input type="radio" name="color-favorite" id="color-fav-yellow" value="yellow"/> 
                <label for="color-fav-yellow">Yellow</label>
            </div>
            <div>
                <input type="radio" name="color-favorite" id="color-fav-blue" value="blue"/> 
                <label for="color-fav-blue">Blue</label>
            </div>
            </fieldset>

            <div>
                <label for="mixed-color-id">Select your favorite color mix:</label>
                <select name="mixed-color-favorite" id="mixed-color-id">
                    <option value="default"> -- Select a color -- </option>
                    <optgroup label="Normal Answers">
                    <option value="orange"> Orange </option>
                    <option value="green"> Green </option>
                    <option value="purple"> Purple </option>
                    </optgroup>
                    <optgroup label="Weird Answers">
                    <option value="buff"> Buff </option>
                    <option value="chartreuse"> Chartreuse </option>
                    <option value="periwinkle"> Periwinkle </option>
                    </optgroup>
                </select>
            </div>

            <div>
                <label for="long-text">Write a limerick on your favorite color</label>
                <textarea id="long-text" name="long-text-answer" rows="5" cols="35">There once was a man from Nantucket...</textarea>
            </div>


            <button type="submit" name="submit-button" id="submit-id">Submit</button>

        </form>
    </main>
</body>
</html>
