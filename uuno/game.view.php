<head>
    <link rel="stylesheet" href="style.css">
</head>
<img src="uuno" alt="uuno" class="uuno">
<?php

$nostopino = array("S0", "S1", "S1", "S2", "S2", "S3", "S3", "S4", "S4", "S5", "S5", "S6", "S6", "S7", "S7", "S8", "S8", "S9", "S9", "S+2", "S+2", "S<>", "S<>", "SØ", "SØ", "P0", "P1", "P1", "P2", "P2", "P3", "P3", "P4", "P4", "P5", "P5", "P6", "P6", "P7", "P7", "P8", "P8", "P9", "P9", "P+2", "P+2", "P<>", "P<>", "PØ", "PØ", "V0", "V1", "V1", "V2", "V2", "V3", "V3", "V4", "V4", "V5", "V5", "V6", "V6", "V7", "V7", "V8", "V8", "V9", "V9", "V+2", "V+2", "V<>", "V<>", "VØ", "VØ", "K0", "K1", "K1", "K2", "K2", "K3", "K3", "K4", "K4", "K5", "K5", "K6", "K6", "K7", "K7", "K8", "K8", "K9", "K9", "K+2", "K+2", "K<>", "K<>", "KØ", "KØ", "MX", "MX", "MX", "MX", "M+4", "M+4", "M+4", "M+4");

$pelipino = array();

$p1kortit = array();

$p2kortit = array();




foreach ($nostopino as $kortti){
    if(strpos("$kortti", "P") !== false){
        echo "<p class='p'>" . $kortti . "</p>";
    }
    else if(strpos("$kortti", "S") !== false){
        echo "<p class='s'>" . $kortti . "</p>";
    }
    else if(strpos("$kortti", "K") !== false){
        echo "<p class='k'>" . $kortti . "</p>";
    }
    else if(strpos("$kortti", "V") !== false){
        echo "<p class='v'>" . $kortti . "</p>";
    }
    else if(strpos("$kortti", "M") !== false){
        echo "<p class='m'>" . $kortti . "</p>";
    }
    else{
        "if you see this, something has gone wrong!";
    }
}




?>