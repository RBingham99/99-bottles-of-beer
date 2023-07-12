<?php

function songLoop() {
    for($i = 99; $i >= 0; $i--) {

        $i > 1 ? $j = $i -1 : $j = 'no more';

        $i == 1 ? $bottle1 = 'bottle' : $bottle1 = 'bottles';

        $j == 1 ? $bottle2 = 'bottle' : $bottle2 = 'bottles';

        if($i > 0) {
            echo "<p>$i $bottle1 of beer on the wall, $i $bottle1 of beer. 
            Take one down and pass it around, $j $bottle2 of beer on the wall.</p>";
        } else {
            echo "<p>No more bottles of beer on the wall, no more bottles of beer.
            Go to the store and buy some more, 99 bottles of beer on the wall.</p>";
        }
    }
}