<?php


function pswd($passwd){
    if (strlen($passwd) > 5 and strlen($passwd) <= 10){
        echo "Password {$passwd} is correct";
    }
    else{
        echo "Password {$passwd} is NOT correct";
    }  
};

function httpc($ht){
    if(substr($ht, 0, 7) == 'http://'){
        echo "Yes<br>";
    }
    else{
        echo "No<br>";
    }
};

function httpc2($ht){
    if(substr($ht, 0, 7) == 'http://' or substr($ht, 0, 8) == 'https://'){
        echo "Yes<br>";
    }
    else{
        echo "No<br>";
    }
};

function png($image){
    if(substr($image, -4) == '.png'){
        echo "Yes<br>";
    }
    else{
        echo "No<br>";
    }
}

function pngjpg($ht){
    if(substr($ht, -4) == '.png' or substr($ht, -4) == '.jpg'){
        echo "Yes<br>";
    }
    else{
        echo "No<br>";
    }
};

function str($ht){
    if(strlen($ht) > 5){
        echo substr($ht,0,5)."...<br>";
    }
    else{
        echo "{$ht}<br>";
    }
};

function doubledot($ht){
    if(strrpos($ht,'.') - strpos($ht,'.') == 1){
        echo "Yes<br>";
    }
    else{
        echo "No<br>";  
    }
};

function palindrom($ht){
        if(strrev($ht)==$ht){
            echo "Yes<br>";
        }
        else{
            echo "No<br>";  
        }
};

function uplow($ht){
    if(ord($ht)>=65 and ord($ht)<=90){
        echo "{$ht} is capital.<br>";
    }
    elseif (ord($ht)>=91 and ord($ht)<=122){
        echo "{$ht} is in lowercase.<br>"; 
    }
    else{
        echo "{$ht} is NOT latin letter.<br>"; 
    }
}

function cube($num){
    $i = 0;
    $c=$num;
    while($i<2){
        $i++;
        $c*=$num; 
        
    }
    echo($c);
}

function square($num){
    echo($num*$num);
}

function sum($a, $b){
    echo($a+$b);
}

function week($a){
    if($a==1){
        echo "Понедельник<br>";
    }
    elseif($a==2){
        echo "Вторник<br>";
    }
    elseif($a==3){
        echo "Среда<br>";
    }
    elseif($a==4){
        echo "Четверг<br>";
    }
    elseif($a==5){
        echo "Пятница<br>";
    }
    elseif($a==6){
        echo "Суббота<br>";
    }
    elseif($a==7){
        echo "Воскресенье<br>";
    }
}

function eq($a, $b){
    if($a==$b){
        echo "True<br>";
    }
    else{
        echo "False<br>";
    }
}

function sum10($a, $b){
    if($a+$b>10){
        echo "True<br>";
    }
    else{
        echo "False<br>";
    }
}

function neg($a){
    if($a<0){
        echo "True<br>";
    }
    else{
        echo "False<br>";
    }
}

function f($n)
{
return($n < 2 ? 1 : $n * f($n-1));
}

?>