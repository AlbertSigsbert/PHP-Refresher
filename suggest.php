<?php

$people = array(
"Anna",
"Brittany",
"Cinderella",
"Diana",
"Eva",
"Fiona",
"Gunda",
"Hege",
"Inga",
"Johanna",
"Kitty",
"Linda",
"Nina",
"Ophelia",
"Petunia",
"Amanda",
"Raquel",
"Cindy",
"Doris",
"Eve",
"Evita",
"Sunniva",
"Tove",
"Unni",
"Violet",
"Liza",
"Elizabeth",
"Ellen",
"Wenche",
"Vicky");

//GET Query String
$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestions
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person) {
      if (stristr($q, substr($person, 0, $len))) {
        if ($suggestion === "") {
          $suggestion = $person;
        } else {
          $suggestion .= ", $person";
        }
      }
    }
  }
  
  // Output "no suggestion" if no suggestion was found or output correct values
  echo $suggestion === "" ? "no suggestion" : $suggestion;
  ?>