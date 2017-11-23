<?php

// Create a user
$user = "Philip";

// Create a Closure
$greeting = function() use ($user) {
 echo "Hello $user";
};

// Greet the user
$greeting(); // Returns "Hello Philip"

echo '<br>';


// Set counter
$i = 0;
// Increase counter within the scope
// of the function
$closure = function () use ($i){ $i++; };
// Run the function
$closure();
// The global count hasn't changed
echo $i . ' '; // Returns 0
 
// Reset count
$i = 0;
// Increase counter within the scope
// of the function but pass it as a reference
$closure = function () use (&$i){ $i++; };
// Run the function
$closure();
// The global count has increased
echo $i; // Returns 1

echo '<br>';

// Set a multiplier
$multiplier = 3;

// Create a list of numbers
$numbers = array(1,2,3,4);

// Use array_walk to iterate
// through the list and multiply
array_walk($numbers, function($number) use($multiplier){
 echo $number * $multiplier . '<br>';
});