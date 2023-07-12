<?php

function songLoop()
{
    for ($i = 99; $i >= 0; $i--) {

        $j = $i > 1 ? $i -1 :'no more';
        $bottle1 = $i == 1 ? 'bottle' : 'bottles';
        $bottle2 = $j == 1 ? 'bottle' : 'bottles';

        if ($i > 0) {
            echo "<p>$i $bottle1 of beer on the wall, $i $bottle1 of beer.</p>" .
            "<p>Take one down and pass it around, $j $bottle2 of beer on the wall.</p>" .
            "<br>";
        } else {
            echo "<p>No more bottles of beer on the wall, no more bottles of beer.</p>" .
            "<p>Go to the store and buy some more, 99 bottles of beer on the wall.</p>";
        }
    }
}