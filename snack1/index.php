<?php

$partite=[
    [
        "squadra1"=>"Los Angeles Lakers",
        "squadra2"=>"Boston Celtics",
        "puntiSquadra1"=> 78,
        "puntiSquadra2"=> 92,
    ],
    [
        "squadra1"=>"Toronto Raptors",
        "squadra2"=>"Chicago Bulls",
        "puntiSquadra1"=> 64,
        "puntiSquadra2"=> 97,
    ],
    [
        "squadra1"=>"Milwaukee Bucks",
        "squadra2"=>"Philadelphia 76ers",
        "puntiSquadra1"=> 84,
        "puntiSquadra2"=> 79,
    ],
    [
        "squadra1"=>"Dallas Mavericks",
        "squadra2"=>"Phoenix Suns",
        "puntiSquadra1"=> 83,
        "puntiSquadra2"=> 97,
    ],
    [
        "squadra1"=>"Charlotte Hornets",
        "squadra2"=>"Minnesota Timberwolves",
        "puntiSquadra1"=> 64,
        "puntiSquadra2"=> 87,
    ],
];

 for ($i=0; $i<count($partite); $i++) {
     echo $partite[$i]["squadra1"] . "-". $partite[$i]["squadra2"] . "|" .$partite[$i]["puntiSquadra1"] . "-". $partite[$i]["puntiSquadra2"] . "<br>";
 };


?> 