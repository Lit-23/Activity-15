<?php

// Task 1: Setting Up Your PHP Environment

// Task 2: Variable Declaration and Data Types
// Declare three variables: one for a string, one for an integer, and one for a boolean value.
$string = "This is a variable with a value of string.";
$integer = 20;
$bolean = true;

// Print the values of these variables using echo or print.
echo "$string" . "<br>";
echo "$integer" . "<br>";
echo "$bolean" . "<br>";

// Task 3: Conditionals
// Implement an if-else statement that checks if the integer variable from Task 2 is greater than 10.
if($integer > 10){
  print "Hey, it's 20." . "<br>";
} else {
  print "Nope, it's less than 10." . "<br>";
}

// Task 4: Loops
// Use a for loop to print numbers from 1 to 5.
for($counter = 1; $counter <= 5; $counter++) {
  print "$counter" . "<br>";
}

// Implement a while loop that prints numbers from 5 to 1.
$nums = 5;
while($nums >= 1) {
  print "$nums" . "<br>";
  $nums--;
}

// Task 5: Arrays
// Declare an indexed array with at least three elements (e.g., names of fruits).
$foods = array("banana", "orange", "apple");

// Create an associative array representing information about a person (e.g., name, age, and city).
$personInfo = array(
  "first_name" => "Rommel",
  "last_name" => "Marquez",
  "age" => 25,
  "address" => "Lipa City, Batangas",
  "status" => "Actively looking for work!",
);

// Task 6: Functions
// Write a function that accepts two parameters (numbers) and returns their sum.
function sum($a, $b) {
  return $a + $b;
};
print sum(5,10);

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 15(PHP)</title>
  </head>
  <body>
    
    <!-- Task 7: Form Handling (Bonus) -->
    <!-- Create a simple HTML form with a text input that takes a name. -->
    <form method="POST" action="index.php">
      <br>
      <label for="name">Your Name:</label> 
      <br>
      <input type="text" id="name" name="name" required>
      <br>
      <button type="submit">SUBMIT</button>
    </form>

    <?php
      $name = $_POST["name"];
      if($name) {
        echo "Hello " . $name . "!";
      }
    ?>

  </body>
</html>