<?php

$games = ["The Legend of Zelda Breath of The Wild", "Cyberpuk 2077", "Skyrim", "Horizon Zero Dawn"];

foreach($games as $game){
    echo "Saya sedang bermain game $game".PHP_EOL;
}

foreach($games as $index => $game){
    echo "Saya sedang bermain game $game yang ada pada $index".PHP_EOL;
}