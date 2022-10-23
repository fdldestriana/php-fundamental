<?php

for ($counter = 1; $counter <= 10; $counter++){
    echo "Saya sedang belajar PHP $counter".PHP_EOL;
}

$counter = 1;
for (; $counter <= 10; $counter++) {
    if ($counter > 5) {
        break;
    }
    echo "Saya sedang belajar PHP $counter".PHP_EOL;
}

for ($counter = 1; $counter <= 10; $counter++){
    if ($counter < 5) {
        continue;
    }
    echo "Saya sedang belajar PHP $counter".PHP_EOL;
}