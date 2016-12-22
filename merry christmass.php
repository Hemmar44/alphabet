<?php
$A='';$C='';$E='';$M=''; $O=''; $R=''; $S=''; $T=''; $Y='';
        
M(); E(); R(); Y(); C(); H(); I(); S(); T(); A(); O();

$merry = [$M, $E, $R, $R, $Y];
$christmas = [$C, $H, $R, $I, $S, $T, $M, $A, $S, $S];
$ho = [$H, $O];



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


function M() {
    global $M;
    for($i = 10, $j=0; $i > 0; $i--, $j++) {
    $M.= "*". str_repeat('&nbsp;', $j). "*" .str_repeat('&nbsp;', $i) .str_repeat('&nbsp;', $i) ."*".str_repeat('&nbsp;', $j)."*<br/>";
}
return $M;
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
return $O;
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


?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
    <title>Merry Cristmass</title>
	
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello/css/fontello.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>-->

        <style>
            div{
               width:10%;
               float:left;
            }
            section:after{
                display: block;
                clear:both;
                content: '';
            }
            section {
                margin-bottom: 20px;
            }
        </style>
</head>
<body>
        <?php 
        echo "<section>";
        for($i=0; $i<count($merry); $i++) {
            echo "<div>{$merry[$i]}</div>";
        }
        echo "</section>";
        
        echo "<section>";
        for($i=0; $i<count($christmas); $i++) {
            echo "<div>{$christmas[$i]}</div>";
        }
        echo "</section>";
        
        echo "<section>";
        for($i=0; $i<3; $i++) {
            echo "<div>{$ho[0]}</div><div>{$ho[1]}</div>";
        }
        echo "</section>";
        
        ?>
</body>
</html>