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
    echo str_repeat('&nbsp;',2). "********<br/>";
    }
    else if($i==1 or $i==8){
        echo "&nbsp*<br/>";
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

for($i = 0; $i < 10; $i++) {
    if($i==0 or $i == 9 ) {
    echo str_repeat('&nbsp;',2). "********<br/>";
    }
    elseif($i==1){
        echo "&nbsp*<br/>";
    }
    elseif($i==6){
        echo "*".str_repeat('&nbsp;',13)."**<br/>";
    }
    
    elseif($i==7) {
         echo "*".str_repeat('&nbsp;',15)."*<br/>";
    }
    
    elseif($i==8) {
         echo "&nbsp*".str_repeat('&nbsp;',14)."*<br/>";
    }
        
    else {
        echo"*<br/>";
    }
}
echo "<br/>";
echo "<hr/>";


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
for($i = 20, $j=0; $i > 0; $i-=2, $j+=2) {
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

for($i =0, $j=0; $i < 10; $i++, $j+=2) {
    if($i==0 or $i == 9 ) {
    echo str_repeat('&nbsp;',2). "********<br/>";
    }
    elseif($i==1 or $i==8){
        echo "&nbsp;*".str_repeat('&nbsp;',14)."*<br/>";
    }
    else{
        echo str_repeat('&nbsp;',$j)."*<br/>";
    }
   
}
echo "<br/>";
echo "<hr/>";

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

//W

for($i = 10, $j=0; $i > 0; $i--, $j++) {
    echo "*". str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j) .str_repeat('&nbsp;', $j) ."*".str_repeat('&nbsp;', $i)."*<br/>";
}
echo "<br/>";
echo "<hr/>";

//V
for($i = 10, $j=0; $i > 0; $i--, $j++) {
    
    echo  str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i+$i)."*<br/>";
    
}
echo "<br/>";
echo "<hr/>";
//X
for($i = 4, $j=2; $i > 0; $i--, $j++) {
    echo  str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i+$i+1)."*<br/>";
}
for($i = 6, $j=0; $i > 0; $i--, $j++) {
    echo  str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j+$j+1)."*<br/>";
    
}

echo "<br/>";
echo "<hr/>";

//Y
for($i = 4, $j=2; $i > 0; $i--, $j++) {
    echo  str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i+$i+1)."*<br/>";
}
for($i = 6, $j=8; $i > 0; $i--) {
 echo str_repeat('&nbsp;', $j). "* <br/>";
 
}
echo "<br/>";
echo "<hr/>";

//Z
for($i = 0, $j = 20; $i < 10; $i++, $j-=2) {
    if($i==0 or $i == 9 ) {
    echo "**********<br/>";
    }
    else {
        echo str_repeat('&nbsp;', $j)."*<br/>";
    }
}

echo "<br/>";
echo "<hr/>";

//as functions

//A
function A(){
global $A;
for($i = 10, $j=0; $i > 0; $i--, $j++) {
    if($i == 4){
        $A.= str_repeat('&nbsp;', $i). "******** <br/>";
    }
    else{
        $A.=  str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
return $A;
}

//B
function B(){
    global $B;
    for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9 or $i==4 or $i==0){
        $B.= "********* <br/>";
    }
    else{
        $B.=  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
return $B;
}

//C
function C() {
    global $C;
    for($i = 0; $i < 10; $i++) {
    if($i==0 or $i == 9 ) {
    $C .= str_repeat('&nbsp;',2). "********<br/>";
    }
    else if($i==1 or $i==8){
        $C .= "&nbsp*<br/>";
    }
    else {
       $C .="*<br/>";
    }
}
return $C;
}

//D
function D() {
    global $D;
    for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9 or $i==0){
        $D .= "********* <br/>";
    }
    else{
        $D .= "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
return $D;
}

//E
function E() {
    global $E;
    for($i = 0; $i < 10; $i++) {
    if($i==0 or $i== 4 or $i == 9 ) {
    $E .= "**********<br/>";
    }
    else {
    $E .= "*<br/>";
    }
}
return $E;
}

//F
function F() {
    global $F;
    for($i = 0; $i < 10; $i++) {
    if($i==0 or $i== 4) {
        $F .= "**********<br/>";
    }
    else {
       $F.="*<br/>";
    }
}
return $F;
}

//G
function G(){
    global $G;
    for($i = 0; $i < 10; $i++) {
    if($i==0 or $i == 9 ) {
    $G.= str_repeat('&nbsp;',2). "********<br/>";
    }
    elseif($i==1){
        $G.= "&nbsp*<br/>";
    }
    elseif($i==6){
        $G.= "*".str_repeat('&nbsp;',13)."**<br/>";
    }
    
    elseif($i==7) {
         $G.= "*".str_repeat('&nbsp;',15)."*<br/>";
    }
    
    elseif($i==8) {
         $G.="&nbsp*".str_repeat('&nbsp;',14)."*<br/>";
    }
        
    else {
        $G.="*<br/>";
    }
}
return $G;
}

//H
function H() {
    global $H;
for($i = 10, $j=8; $i > 0; $i--) {
    if($i == 5){
        $H.= str_repeat('&nbsp;', 2). "******** <br/>";
    }
    else{
        $H.=  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
return $H;
}

//I
function I() {
    global $I;
    for($i = 10, $j=8; $i > 0; $i--) {
     $I.= str_repeat('&nbsp;', $j). "* <br/>";
 
}
return $I;
}

//J
function J() {
    global $J;
    for($i = 0, $j = 12; $i < 10; $i++) {
    if($i==9) {
        $J.= "*******<br/>";
    }
    else {
        $J.= str_repeat('&nbsp;', $j). "* <br/>";
    }
}
return $J;
}

//K
function K() {
    global $K;
    for($i = 5, $j=12; $i > 0; $i--, $j-=3) {
    $K.="*". str_repeat('&nbsp;', $j). "*<br/>" ;
}
for($i = 5, $j=0; $i > 0; $i--, $j+=3) {
    $K.= "*". str_repeat('&nbsp;', $j). "*<br/>" ;
}
return $K;
}

//L
function L() {
    global $L;
for($i = 0; $i < 10; $i++) {
    if($i==9) {
        $L.= "**********<br/>";
    }
    else {
        $L.= "*<br/>";
    }
}
return $L;
}

echo $L;
//M
function M() {
    global $M;
    for($i = 10, $j=0; $i > 0; $i--, $j++) {
    $M.= "*". str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i) .str_repeat('&nbsp;', $i) ."*".str_repeat('&nbsp;', $j)."*<br/>";
}
return $M;
}

//N
function N() {
    global $N;
    for($i = 20, $j=0; $i > 0; $i-=2, $j+=2) {
    $N.= "*". str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i) ."*<br/>";
}
return $N;
}

//O
function O() {
    global $O;
    for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9 or $i==0){
        $O.= str_repeat('&nbsp;', 1). "********* <br/>";
    }
    else{
        $O.=  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
return $O;;
}

//P
function P() {
    global $P;
for($i = 0, $j=8; $i < 5; $i++) {
    if($i==4 or $i==0){
        $P.= "********* <br/>";
    }
    else{
        $P.=  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
for($i = 0; $i < 5; $i++) {
    global $P;
    $P.= "*<br/>";
}
return $P;
}

//R
function R() {
    global $R;
    for($i = 0, $j=8; $i < 5; $i++) {
    if($i==4 or $i==0){
        $R.= "********* <br/>";
    }
    else{
        $R.=  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
for($i = 5, $j=0; $i > 0; $i--, $j+=3) {
    global $R;
    $R.= "*". str_repeat('&nbsp;', $j). "*<br/>" ;
}
return $R;
}

//S
function S() {
    global $S;
    for($i =0, $j=0; $i < 10; $i++, $j+=2) {
    if($i==0 or $i == 9 ) {
        $S.= str_repeat('&nbsp;',2). "********<br/>";
    }
    elseif($i==1 or $i==8){
        $S.= "&nbsp;*".str_repeat('&nbsp;',14)."*<br/>";
    }
    else{
        $S.= str_repeat('&nbsp;',$j)."*<br/>";
    }
}
return $S;;
}

//T
function T() {
    global $T;
    for($i = 10, $j=8; $i > 0; $i--) {
 if($i==10) {
     $T.= "*********<br/>";
 }
 else {
    $T.= str_repeat('&nbsp;', $j). "* <br/>";
 }
}
return $T;;
}

//U
function U(){
    global $U;
    for($i = 0, $j=8; $i < 10; $i++) {
    if($i == 9){
        $U.= str_repeat('&nbsp;', 1). "********* <br/>";
    }
    else{
        $U.=  "*" .str_repeat('&nbsp;', $j+$j)."*<br/>";
    }
}
return $U;
}

//W
function W() {
    global $W;
    for($i = 10, $j=0; $i > 0; $i--, $j++) {
    $W.= "*". str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j) .str_repeat('&nbsp;', $j) ."*".str_repeat('&nbsp;', $i)."*<br/>";
}
return $W;
}

//V
function V() {
    global $V;
    for($i = 10, $j=0; $i > 0; $i--, $j++) {
    $V.= str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i+$i)."*<br/>";
 }
 return $V;
}

//X
function X() {
    global $X;
    for($i = 4, $j=2; $i > 0; $i--, $j++) {
    $X.=  str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i+$i+1)."*<br/>";
}
for($i = 6, $j=0; $i > 0; $i--, $j++) {
    $X.=  str_repeat('&nbsp;', $i). "*" .str_repeat('&nbsp;', $j+$j+1)."*<br/>";
}
return $X;
}

//Y
function Y() {
    global $Y;
for($i = 4, $j=2; $i > 0; $i--, $j++) {
    $Y.=  str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i+$i+1)."*<br/>";
}
for($i = 6, $j=8; $i > 0; $i--) {
    $Y .= str_repeat('&nbsp;', $j). "* <br/>";
}
return $Y;
}

//Z
function Z() {
    global $Z;
    for($i = 0, $j = 20; $i < 10; $i++, $j-=2) {
    if($i==0 or $i == 9 ) {
        $Z.= "**********<br/>";
    }
    else {
        $Z.= str_repeat('&nbsp;', $j)."*<br/>";
    }
}
return $Z;
}
?>