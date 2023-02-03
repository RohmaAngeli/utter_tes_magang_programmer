<?php
function longest_word_in($sentence) {
//clean the text of punctuation
  $filter = array(".",",","!","?","(",")"); //bisa ditambahkan
  $teks_clean = str_replace($filter, "", $sentence); //bersihkan tanda baca
// Convert To Array
  $wordsList = explode(" ", $teks_clean);
  //for check the array
  // echo '<pre>';
  // print_r($wordsList);
  // echo '</pre>';
    
  // Set Longest Word Variable
  $longword = 0;
  $longestWord = ' ' ;
  foreach ($wordsList as $word):
    // Check If Current Word
    if (strlen($word) >= strlen($longestWord)){
      $longestWord = $word;
    }
      endforeach;
  return $longestWord;
}


// the input
echo longest_word_in("The quick brown fox jumps over the lazy dog.");
echo ("<br>");
echo longest_word_in("The sun was shining brightly in the clear blue sky.");
echo ("<br>");
echo longest_word_in("The birds were singing and the flowers were in bloom.");
echo ("<br>");
echo longest_word_in("She was walking down the street, lost in thought.");
echo ("<br>");
echo longest_word_in("He sat at his desk, staring at the computer screen.");
echo ("<br>");
echo longest_word_in("The city was bustling with people going about their day.");
echo ("<br>");
echo longest_word_in("The air was cool and crisp, perfect for a morning jog.");
echo ("<br>");
echo longest_word_in("She stood at the edge of the cliff, looking out at the vast ocean.");
echo ("<br>");
echo longest_word_in("The trees rustled in the gentle breeze, their leaves a riot of color.");
echo ("<br>");
echo longest_word_in("He lay on the grass, gazing up at the clouds as they drifted by.");
echo ("<br>");
echo longest_word_in("The sound of laughter filled the room as friends gathered for dinner.");
?>
