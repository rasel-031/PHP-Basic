<?php 

$sentence = "I love Bangladesh";

//string length
echo "Sentence length: ". strlen($sentence)."\n";

//string word count
echo "Sentence word: ". str_word_count($sentence)."\n";

//string reverse
echo "Sentence reverse: ". strrev($sentence)."\n";

//string position
echo "Sentence match position: ". strpos($sentence, "love")."\n";

//string replace
echo "Sentence word replace: ". str_replace("Bangladesh","Australia", $sentence);

?>