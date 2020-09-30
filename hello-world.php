This is before my PHP tag!


<?php  // ALL PHP code must be inside the <?php tags!
// "Echo" and "print" are functions we can...
// use to output strings as a response. 
echo "Hello, World!";

// There are two other styles of comment we can use in PHP. This (//)
// is a single line.

# This is also a single-line comment.

/**
 * This is our familiar
 * multi-line
 * comment!
 */

 // Variable names start with a dollar-sign ($).
 // *** They are case-sensitive.
 // (Also, don't start them with numbers or special characters)

 // Single quotes will NOT evaluate special character escapes or variables.
 $myVar = "string value";
 $studentName = "\nFahad";
 echo $studentName;

 $studentName2 = '\nDanish';
 echo $studentName2;

 // Double quotes, WILL though! Careful which one you use for
 // your current use-case!
 echo "\n\n Two students in TECHCareers are: \n$studentName\n$studentName2.";

 // The concatenation character in PHP is the period!
 echo "\n\nThis string is being " . 'concatenated!';

 // Strings...
 $string1 = 'I\'m a string!';
 $string2 = "I\'m ALSO a string!";

 // Integers 
 $int1 = -26;
 $int2 = 0;
 $int3 = 42;

 // Floats / Doubles...
 $float1 = 3.14;
 $float2 = -29.6;

 // Booleans...
 $bool1 = TRUE; // NOTE: They are NOT case sensitive
 $bool2 = false;

 // Arrays...
 $array1 = ['First value', 17, 16.8, FALSE ]; // This syntax is identical
 // in function to...
 $array2 = array( 'First value', 17, 16.8, FALSE ); // this
 echo $array1[1]; // outputs "17"

 // There is also an ASSOCIATIVE array, where KEYS are defined as well!
 // This is more comparable to a MAP in JS, or even a basic object.
 $array3 = array(
   // Associative arrays have KEYS separated from VALUES by fat arrow. 
  'key' => 'value',
  'name' => 'George',
  'age' => 36
 );
 // echo $array3[1]; // Cannot find by index here!
 echo $array3['name']; // Outputs "George".

 // Objects...
 $object = new stdClass(); // Create a new instance of the standard class/
 $object->name = 'TECHCareers'; // Simple property assignment
 $object->cohort = 4.2;
 $object->year = 2020;

 echo "\n\n$object->name" . ' | ' . $object->cohort . ' | ' . $object->year;

 // Null...
 $myNullVar = NULL; // Again this is case-insensitive

 // LOOPS!
 // Our old friend, the for loop is here!
 for ( $iterator = 0; $iterator < 10; $iterator += 2 )
 {
   echo "\nOUR FOR LOOP IS ON ITERATION: $iterator";
 };

 // Associative array
 $students = [
  'Danish' => 'Reading',
  'Eboka' => 'Reading',
  'Birm' => 'Watching Tennis',
  'Adolf' => 'Playing music',
  'Kenji' => 'Rock Climbing',
  'Fahad' => 'Gaming'
 ];

 // "foreach" lets us loop through a set list of values
 // from an Array or Object!
 // NOTE: We can grab an idex/ key AND the value by using
 // the fat arrow in our foreach!
 // ( ARRAY as KEY => VALUE )
 // This is comparable to for...of and for...in from JavaScript.
 // for( item of array ) || for( property of object )
 foreach ( $students as $name => $hobby )
 {
  echo "Hi, my name is $name! I like $hobby.\n";
 };

 // While loop.
 $i = 12;
 while ( $i > 2 )
 {
   echo "WHILE ITERATOR IS AT: $i\n";
   $i--; // This is the same as $i = $i -1;
 };

 function addition ($num1, $num2 )
 {  // + is a mathematical operator, so we're good to go!
    return $num1 + $num2; 
 }

 echo addition(5,30);
 echo "\nADDITION RESULT: " . addition( 5, 10); // 5 + 10
 echo "\nADDITION RESULT: " . addition( "23", 3); // 23 + 3
 echo "\nADDITION RESULT: " . addition( "hi5", 2); // 0 + 2
 echo "\nADDITION RESULT: " . addition( " 7", 3); // 7 + 3
 echo "\nADDITION RESULT: " . addition("-2", 1); // -2 + 1
 echo "\nADDITION RESULT: " . addition("37tree5", 2); // 37 + 2

 $myFunctionResult = addition( 2, 2 );
 echo "\nResult from variable: $myFunctionResult";
  ?>