<?php

/* READ SCORES FROM THE FILE AND PREPARE A FREQUENCY TABLE */

// $file = '../extras/scores.txt';

// if (file_exists($file)) {
//  //Read the file
//  $handle = fopen($file, 'r');
//  $contents = fread($handle, filesize($file));
//  fclose($handle);

//  echo $contents.'<br>';
//  $content_arr = explode(',',$contents);

//  $num_frequency = array_count_values($content_arr);


//  echo "<table>\n";
//  echo "<tr><th>Score</th><th>Frequency</th></tr>\n";
//  foreach($num_frequency as $key => $value){
//     echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>\n";
//  }
//  echo "</table>\n";
// }

$file = "../extras/scores.txt";

if (file_exists($file)) {
   //Read file
   $handle = fopen($file, 'r');
   $contents = fread($handle, filesize($file));
   fclose($handle);

   echo $contents.'<br>';

   //Convert scores to an array
   $scores = explode(",", $contents);

   $scores_frequency = array_count_values($scores);

   print_r($scores_frequency);

   //Display a table to show results(Score / frequency)
   echo "<table>\n";
   echo "<th><tr><td>Score</td><td>Frequency</td></tr></th>\n";
   foreach($scores_frequency as $score => $frequency){
      echo "<tr><td>$score</td><td>$frequency</td></tr>\n";
   }
   echo "</table>\n";
}