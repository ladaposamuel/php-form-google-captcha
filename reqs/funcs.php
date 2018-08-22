<?php
$root_url="http://staybusy.pp/contact";
$secret = '6Lcn-QMTAAAAAG-0WJhUV_9nFG7rechQwBERhKjC';

function highlight_file_with_line_numbers($file) { 
    //Strip code and first span
  $code = substr(highlight_file($file, true), 36, -15);
  //Split lines
  $lines = explode('<br />', $code);
  //Count
  $lineCount = count($lines);
  //Calc pad length
  $padLength = strlen($lineCount);
  
  //Re-Print the code and span again
  echo "<code><span style=\"color: #000000\">";
  
  //Loop lines
  foreach($lines as $i => $line) {
      //Create line number
      $lineNumber = str_pad($i + 1,  $padLength, '0', STR_PAD_LEFT);
      //Print line
      echo sprintf('<br><span style="color: #999999">%s | </span>%s', $lineNumber, $line);
  }
  
  //Close span
  echo "</span></code>";
}