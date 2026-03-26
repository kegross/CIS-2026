<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>Book Form Validation</title>
</head>
<body>
    <main>
        <?php

        function check_answer_not_null($question_name, $question_number){
            $user_response = $_POST[$question_name];
            if(is_null($user_response)){
                return "Error: Please answer question " + $question_number;
            }
        }

        /*
        validates the question about a book series
        return: non-empty string if there is an error, null if no error found
        */
        function book_series_validation($question_name, $book_array, $question_number){
            $user_response = $_POST[$question_name];
            if(array_diff($user_response, $book_array)){
                return "Error: Values Outside Array.";
            }
            if((count($user_response) >= 1) and ($user_response[0] > 1)){
                return "Error: You selected later book(s), but not the first book.";
            }
            if((count($user_response) > 1) and in_array(0, $user_response)){
                return "Error: You've selected that you've read none of the books and that you've read some of the books.";
                sort($user_response);
                foreach($user_response as $index => $book_num){
                    if($index > 0){
                        $previous_num = $user_response[$index-1];
                        $next_book = $previous_num + 1;
                        if($book_num != $next_book){
                            return "Error: You skipped a book!";
                        }
                    }
                }
            }
        }

        function num_minutes_read(){
            $user_response = $_POST["mins_reading"];
            if(!is_numeric($user_response)){
                return "Error: This must be a number";
            }
            if($user_response < 0){
                return "Error: You must be reading for a non-negative number of minutes";
            }
            if($user_response > 1440){
                return "Error: There are not that many minutes in the day. Please respond with the number of minutes you read today.";
            }
        }

        function validate_questions(){
            //set $errors = false;
            // check not null for all questions
            // use other validation functions as needed
            // if validation function comes back with an error - update $errors = true;

            // if there was ever an error ($errors is true), DON'T DO ANYTHING WITH THE USER DATA
            // return false if there was an error, true if there were no errors
        }

        function main(){
            $is_valid_response = validate_questions();
            if($is_valid_response){
                //call sanitization function
                // use the SANITIZED values in my prepared statement
            }
        }

        ?>

    </main>
</body>
</html>