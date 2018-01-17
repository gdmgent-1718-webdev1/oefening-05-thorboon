<?php


function testLeeftijd(int $leeftijd): string
{
    if ($leeftijd < 16) {
        $boodschap = "${leeftijd} jaar is te jong voor deze film.";
    } elseif (16 <= $leeftijd && $leeftijd < 18) {
        $boodschap = "${leeftijd} jaar, je hebt ouderlijk toezicht nodig.";
    } else {
        $boodschap = "Je bent al ${leeftijd} jaar. Geniet van de film!";
    }
    return $boodschap;
}

$leeftijden = [13, 15, 16, 17, 18, 19];
$leeftijd = (int) readline('Wat is je leeftijd? ');
array_push($leeftijden, $leeftijd);

foreach ($leeftijden as $leeftijd) {
    echo testLeeftijd($leeftijd), PHP_EOL;
}



