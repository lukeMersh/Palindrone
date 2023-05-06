<html>

<!--
  Big Problem- Find a palidrone from a given string
 -->
<!--Small problem #1 - Get the string as a user input into a variable
-->

<form method="post">
    Enter a Number/String: <input type="text" name="string"/><br>
    <button type="submit">Check</button>
</form>
</html>

<?php
if($_POST)
{
    $string = $_POST['string'];
/**
 * Step 2- Reverse the user input and store it in seperate variable
 */
  
    $reverse = strrev($string);


/**
 * Step 3-compare the variables and Based on the comparison results, display the results in a user understandable format
 */
  
if($string == $reverse){
            echo "The number/string $string is Palindrome";
        }else{
            echo "The number/string $string is not a Palindrome";
        }
}
      ?>

