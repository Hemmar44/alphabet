<?php

//A
$A="";
function A() {
    global $A;
for($i = 10, $j=0; $i > 0; $i--, $j++) {
    if($i == 4){
        $A.= str_repeat('&nbsp;', $i). "******** <br/>";
    }
    elseif ($i==1) {
     $A.=  str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j+$j)."*";
}
    else{
        $A.=  str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
}
echo "<br/>";
echo "<hr/>";

A();
echo "<span>$A</span>  <span>$A</span>";


?>