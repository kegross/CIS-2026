<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>My Example Web Page</title>
</head>
<body>
    <main>
        <form action="" method="POST">
            <div>
                <label for="email-id">Enter your email:</label>
                <input type="email" name="email-input" id="email-id" />
            </div>

            <div>
            What colors do you like?
            </div>
            <div>
                <input type="checkbox" name="color-choice" id="color-red" value="red"/> 
                <label for="color-red">Red</label>
            </div>
            <div>
                <input type="checkbox" name="color-choice" id="color-yellow" value="yellow"/> 
                <label for="color-yellow">Yellow</label>
            </div>
            <div>
                <input type="checkbox" name="color-choice" id="color-blue" value="blue"/> 
                <label for="color-blue">Blue</label>
            </div>

            <div>
            What is your favorite color?
            </div>
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

            <div>
                <label for="mixed-color-id">Select your favorite color mix:</label>
                <select name="mixed-color-favorite" id="mixed-color-id">
                    <option value="orange"> Orange </option>
                    <option value="green"> Green </option>
                    <option value="purple"> Purple </option>
                </select>
            </div>


            <button type="submit" name="submit-button" id="submit-id">Submit</button>

        </form>
    </main>
</body>
</html>
