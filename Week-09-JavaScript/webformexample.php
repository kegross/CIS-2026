<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>A Book Form</title>
</head>
<body>
    <main>
        <form action="validationexample.php" method="POST">

        <fieldset>
            <legend>What books from <i>The Locked Tomb</i> series have you read?</legend>

            <?php
            // arrays are nice because then it would be easy to add a book later on
            $book_titles = array("Gideon the Ninth","Harrow the Ninth","Nona the Ninth","Alecto the Ninth");
            foreach($book_titles as $index => $title){
                $book_num = $index + 1;  // remember, indices start at zero
                print("<div>");
                print("<input type='checkbox' name='bookseries[]' id='lockedtombseries-$book_num' value=$book_num>");
                print("<label for='lockedtombseries-$book_num'>$title</label>");
                print("</div>");

            }
            /*
            could also do as a for loop:
            for($i=1;$i<5;$i++){
                print("<input type='checkbox' name='bookseries[]' id='lockedtombseries-$i' value=$i>");
                $curr_title = $book_titles[$i-1];
                print("<label for='lockedtombseries-$i'>$curr_title</label>");

            }
            this is less easy to change over time - if we add more books we need to adapt the $i<5 statement - we could also use $i<count($book_titles)+1
            */
            ?>
            <div>
            <input type='checkbox' name='bookseries[]' id='lockedtombseries-none' value=0>
            <label for="lockedtombseries-none">None of the Above</label>
            </div>

        </fieldset>

            <div>
                <label for="mins-reading">How many minutes did you spend reading <i>The Locked Tomb</i> series today?</label>
                <input type="number" name="mins_reading" id="mins-reading">
            </div>


            <button type="submit" name="submit-button" id="submit-id">Submit</button>

        </form>
    </main>
</body>
</html>