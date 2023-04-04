<?php
    //Trojan Bogacki 3pir
    $tab = array(array());
    $a = 0;
    $b=0;
    $b2 = 0;

    echo "TABLICA: <br>";

    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            $tab[$i][$j] = chr(rand(97,101));
            echo $tab[$i][$j];  echo " ";

            if($tab[$i][$j]=='a') $a++;
            if($tab[$i][$j]=='b') $b++;
        }
        if($b>$b2) $b2=$b;
        $b = 0;
        echo "<br>";
    }

    echo "Litera 'a' wystąpiła $a razy. <br>";

    echo "Wiersze, w których litera 'b' wystąpiło najczęściej: ";
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if($tab[$i][$j]=='b') $b++;
        }
        if($b2==$b) {
            echo " ["; echo $i+1; echo "] ";
        }
        $b = 0;
    }
?>