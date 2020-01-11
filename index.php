<?php
function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\n
            But I have promises to keep,\n
            And ${distance_unit} to go before I ${verb},\n
            And ${distance_unit} to go before I ${verb}.\n";
  return $story;
}

echo generateStory("cat", "run", "green", "meters");
echo generateStory("baby", "cry", "yellow", "liters");
echo generateStory("empty void", "speak", "black", "volumes");