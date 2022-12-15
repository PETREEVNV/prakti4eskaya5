<?php
 function echoNumberBy0ToArg_v1($arg)
{
  for ($i = 0; $arg >= $i; $i++) {
     echo $i . '<br />';
}
}
 echoNumberBy0ToArg_v1(10);
?>
