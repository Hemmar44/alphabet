<?php

//A
for($i = 10, $j=0; $i > 0; $i--, $j++) {
    if($i == 4){
        echo str_repeat('&nbsp;', $i). "******** <br/>";
    }
    else{
    echo  str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//B
for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9 or $i==4 or $i==0){
        echo "********* <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//C
for($i = 0; $i < 10; $i++) {
    if($i==0 or $i == 9 ) {
    echo "**********<br/>";
    }
    else {
        echo"*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//D
for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9 or $i==0){
        echo "********* <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//E
for($i = 0; $i < 10; $i++) {
    if($i==0 or $i== 4 or $i == 9 ) {
    echo "**********<br/>";
    }
    else {
        echo"*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//F

for($i = 0; $i < 10; $i++) {
    if($i==0 or $i== 4) {
    echo "**********<br/>";
    }
    else {
        echo"*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//G


//H
for($i = 10, $j=8; $i > 0; $i--) {
    if($i == 5){
        echo str_repeat('&nbsp;', 2). "******** <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//I
for($i = 10, $j=8; $i > 0; $i--) {
 echo str_repeat('&nbsp;', $j). "* <br/>";
 
}
echo "<br/>";
echo "<hr/>";

//J
for($i = 0, $j = 12; $i < 10; $i++) {
    if($i==9) {
    echo "*******<br/>";
    }
    else {
        echo str_repeat('&nbsp;', $j). "* <br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//K
for($i = 5, $j=12; $i > 0; $i--, $j-=3) {
    echo "*". str_repeat('&nbsp;', $j). "*<br/>" ;
}
for($i = 5, $j=0; $i > 0; $i--, $j+=3) {
    echo "*". str_repeat('&nbsp;', $j). "*<br/>" ;
}
echo "<br/>";
echo "<hr/>";



//L

for($i = 0; $i < 10; $i++) {
    if($i==9) {
    echo "**********<br/>";
    }
    else {
        echo"*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//M
for($i = 10, $j=0; $i > 0; $i--, $j++) {
    echo "*". str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i) .str_repeat('&nbsp;', $i) ."*".str_repeat('&nbsp;', $j)."*<br/>";
}
echo "<br/>";
echo "<hr/>";

//N
for($i = 10, $j=0; $i > 0; $i--, $j++) {
    echo "*". str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i) ."*<br/>";
}
echo "<br/>";
echo "<hr/>";

//O
for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9 or $i==0){
        echo str_repeat('&nbsp;', 1). "********* <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";

//P
for($i = 0, $j=8; $i < 5; $i++) {
    if($i==4 or $i==0){
        echo "********* <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
for($i = 0; $i < 5; $i++) {
    echo "*<br/>";
}
echo "<br/>";
echo "<hr/>";

//R
for($i = 0, $j=8; $i < 5; $i++) {
    if($i==4 or $i==0){
        echo "********* <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
for($i = 5, $j=0; $i > 0; $i--, $j+=3) {
    echo "*". str_repeat('&nbsp;', $j). "*<br/>" ;
}

echo "<br/>";
echo "<hr/>";

//S

//T
for($i = 10, $j=8; $i > 0; $i--) {
 if($i==10) {
     echo "*********<br/>";
 }
 else {
 echo str_repeat('&nbsp;', $j). "* <br/>";
 }
}
echo "<br/>";
echo "<hr/>";

//U
for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9){
        echo str_repeat('&nbsp;', 1). "********* <br/>";
    }
    else{
    echo  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";


//V

//X

//Y

//Z

?>