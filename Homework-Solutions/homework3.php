<?php
/*
Only doing challenge problems (along with making everything into functions and doing good commenting etiquette)
Implements Adaptable FizzBuzz (two ways), Anagrams, Palindromes, Binary Search.
*/

/*
Implements fizzbuzz with any number of divisors and any number of weird words.
parameters: $divisors (array): an array of the divisors to test, $words (array): an array of the words that pair with the divisors, $max (integer): maximum value to go up to
return: (boolean) false if there are issues
*/
function adaptableFizzBuzz($divisors, $words, $max){
    if((count($divisors) != count($words)) or (gettype($max) != "integer")){  
        print("Something has gone wrong.");
        return FALSE;
    }
    else{
        for($i=1; $i<=$max; $i++){  // iterate through numbers up to maximum value
            $isDivisible = False; // we need this to track if the value is divisible by anything
            foreach($divisors as $index => $number){ // iterate through all divisors
                if($i%$number == 0){  // we only need a simple if statement here: because echo does not put space in between text (unless we tell it to), it should include the word each time it's necessary. For example: for 15, this would be true for 3 and 5, so would print out the words for those, with no space in between!
                    echo $words[$index]; // this is why we need the index: to match to the words array. Another way to use arrays is demonstrated below
                    $isDivisible = True; // this is now true: the value is divisible by something if we've entered the if statement - note that this will update to true on each divisor, but that doesn't matter as long as it's true by the end
                }
            } // this is the divisors loop, so we need to check for indivisible numbers and add a space so there's space between numbers/words for different numbers
            if(!$isDivisible){ 
                echo $i; // if it's not divisible, echo the number
            }
            echo " "; // either way, echo a space (no else because we want this to run every time!)
        }
        return True; // this is technically not necessary
    }
}

/*
Implements fizzbuzz with any number of divisors paired with any number of weird words.
parameters: $divisorsAndWords (array): an array where the keys are the divisors and the values are the words for these values, $max (integer): maximum value to go up to
return: null
*/
function adaptableFizzBuzzSingleArray($divisorsAndWords, $max){
    for($i = 1; $i <= $max; $i++){
        $isDivisible = False;
        foreach($divisorsAndWords as $number => $word){
            if($i % $number == 0){
                echo $word;
                $isDivisible = True;
            }
        }
        if(!$isDivisible){
            echo $i;
        }
        echo " ";
    }
}

/*
Determines if two strings are anagrams
parameters: $phraseOne (string): the first string to check, $phraseTwo (string): the second string to check
return: (boolean) True if they are anagrams, false if they are not
*/
function isAnagrams($phraseOne, $phraseTwo){
    // First, convert everything to lowercase so we can compare
    $lowerPhraseOne = strtolower($phraseOne);
    $lowerPhraseTwo = strtolower($phraseTwo);

    // Next, remove all whitespace
    $lettersPhraseOne = str_replace(" ", "", $lowerPhraseOne);
    $lettersPhraseTwo = str_replace(" ", "", $lowerPhraseTwo);

    // Now we make these into arrays of their letters, because then we can just sort and compare the arrays!
    $phraseOneArray = str_split($lettersPhraseOne);
    $phraseTwoArray = str_split($lettersPhraseTwo);

    // Technically the sort may not be needed https://www.php.net/manual/en/language.operators.array.php (but it may be dependent on language)
    sort($phraseOneArray);
    sort($phraseTwoArray);
    if($phraseOneArray == $phraseTwoArray){
        return True;
    } else{
        return False;
    }
}

/*
 This function could be done one-line as follows:

    return str_split(str_replace(" ", "", strtolower($phraseOne))) == str_split(str_replace(" ", "", strtolower($phraseTwo)));

 As you can see, it's not as readable! Also cannot do sort - that returns true if it sorted, so the function would always return true if the arrays are sortable!
*/

/*
Determines if a string is a palindrome
parameters: $phrase (string) the string to be tested
return: (boolean) true if it's a palindrome and false if not
*/
function isPalindrome($phrase){
    $alphaPhrase = "";
    for($i = 0;$i<strlen($phrase);$i++){
        if(ctype_alpha($phrase[$i])){
            $alphaPhrase .= $phrase[$i]; // x .= y is shorthand for x = x . y, similar to += if you're familiar!
        }
    } // now $alphaPhrase is all of type alpha
    $alphaPhrase = strtolower($alphaPhrase); // make it all lowercase
    $phraseLength = strlen($alphaPhrase); // need the length more than once, so assigning it as a variable
    for($i = 0; $i<=($phraseLength/2); $i++){
        $oppositeIndex = $phraseLength - $i - 1; // length - i gives nearly the opposite, but we need the extra -1 (0 indexed!) ex: 0 and n-1, 1 and n-2, etc...
        if($alphaPhrase[$i] != $alphaPhrase[$oppositeIndex]){
            return False; // if they're ever not equal, we're done.
        }
    } // if we got through the whole loop, that means there were no times where they weren't equal
    return True;
}

/*
Implements Binary Search
parameters: $list (array): the list to search, $item (any) the item to find in the array.
return: (boolean) true if item in array, false if item not in array
*/
function binarySearch($list, $item){
    if(empty($list)){
        return False;
    }
    sort($list); // first, sort
    $listLength = count($list);
    $middleValue = $list[floor($listLength/2)];
    if($middleValue == $item){
        return True; // found the item!
    } elseif ($middleValue < $item){
        $newList = array_splice($list, (floor($listLength/2)+1)); // if the middle value is less than the item, then we need the bigger half of the array - we do +1 so we don't include the middle value itself
    } else{
        $newList = array_splice($list, 0, floor($listLength/2)); // otherwise, the middle value is greater, so we need the first half of the array
    }
    return binarySearch($newList, $item); //recursive call - after deciding to do this recursively, I added a base case (that the list is empty - which means we've removed a bunch of stuff and still haven't found the item!)
}
// You can do this iteratively. In my opinion, it's a little harder to think about. Instead, you keep track of the starting and ending indexes that your item could be in (for example: if the item is bigger than the middle value, you keep the index above the middle value as the start and the value at the end of the list as the end). If you iterate through this until start == end, that iterates through all possibilities.


/*
For my documentation, I would include a lot of the string functions mentioned here. For example the row in order for str_replace would be:

str_replace, https://www.php.net/manual/en/function.str-replace.php, it replaces all instances of one string with another string (like find and replace), I used it to remove whitespaces (replacing whitespace " " with emptystring "").

Someone did notice looking at strlen that it counts in bytes rather than in characters. There's a suggested function (mb_strlen()) in the comments, but for our purposes (English), strlen is fine to use.
*/

?>


<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>Homework 3 Solutions</title>
</head>
<body>
    <main>
        <h1>Example input/output</h1>

        <h2>Adaptable FizzBuzz</h2>

        <p>
            <code>adaptableFizzBuzz(array(3,5), array("Fizz","Buzz"), 60);</code>
        </p>
        <p>
            <?php 
            adaptableFizzBuzz(array(3,5), array("Fizz","Buzz"), 60);?>
        </p>

        <p>
            <code>adaptableFizzBuzzSingleArray(array(3=>"Fizz", 5=>"Buzz", 7=>"Mazz",), 200);</code>
        </p>
        <p>
            <?php 
            adaptableFizzBuzzSingleArray(array(3 => "Fizz", 5 => "Buzz", 7 => "Mazz"), 200);?>
        </p>

        <h2>Anagrams</h2>

        <!--I actually had a bug in this code initially - I forgot that str_replace needs the thing you want to replace with. Using echos, I was able to narrow down where it was failing, but it was using an errors file that allowed me to actually solve it -->
        <p>
            <code>isAnagrams("The Morse code", "Here come dots")</code>
        </p>
        <p>
            <code>
                <?php
                if(isAnagrams("The Morse code", "Here come dots")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>isAnagrams("Eleven plus two", "Twelve plus one")</code>
        </p>
        <p>
            <code>
                <?php
                if(isAnagrams("Eleven plus two", "Twelve plus one")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>isAnagrams("not", "anagrams")</code>
        </p>
        <p>
            <code>
                <?php
                if(isAnagrams("not", "anagrams")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <h2>Palindromes</h2>

        <p>
            Want some examples of Palindromes? Sure, I'll "name one now, man."
        </p> <!-- If it wasn't obvious: "name one now, man" is a palindrome -->
        <p>
            <code>
                <?php
                if(isPalindrome("name now one, man.")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>isPalindrome("Do geese see God?")</code>
        </p>
        <p>
            <code>
                <?php
                if(isPalindrome("Do geese see God?")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>isPalindrome("Satire Veritas")</code>
        </p>
        <p>
            <code>
                <?php
                if(isPalindrome("Satire Veritas")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>isPalindrome("An Anadrome (or emordnilap) is not a palindrome.")</code>
        </p>
        <p>
            <code>
                <?php
                if(isPalindrome("An Anadrome (or emordnilap) is not a palindrome.")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <h2>Binary Search</h2>

        <p>
            <code>binarySearch(array(1,2,3,4,5,6), 3)</code>
        </p>
        <p>
            <code>
                <?php
                if(binarySearch(array(1,2,3,4,5,6), 2)){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>binarySearch(array("you","can","do","this","with","strings","too"), "too")</code>
        </p>
        <p>
            <code>
                <?php
                if(binarySearch(array("you","can","do","this","with","strings","too"), "too")){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>

        <p>
            <code>binarySearch(array(1,2,3,4,5,6), 7)</code>
        </p>
        <p>
            <code>
                <?php
                if(binarySearch(array(1,2,3,4,5,6), 7)){
                    echo "True";
                } else {
                    echo "False";
                }?>
            </code>
        </p>


    </main>
</body>
</html>