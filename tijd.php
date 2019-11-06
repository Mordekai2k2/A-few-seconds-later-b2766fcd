<?php

// $argv

// Checken of het een tijd en seconden is
$needle = "s";
$argument = $argv[1];
$positie = strpos ( $argument , $needle);
var_dump($positie);

// bepalen voor s
if ($positie == false ) {
echo "Geen tijd gevonden.";
exit();
}

// uit elkaar halen
$aantalseconden = (int)$argument;

// weergeven als *Tijd* "Seconden"
echo $aantalseconden . " Seconden";