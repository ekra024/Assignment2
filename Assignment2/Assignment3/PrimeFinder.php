<?php
    function prime($a) {
        for($i = 2; $i <= sqrt($a); $i++) {
            if($a % $i == 0) {
                return false;
            }
        }

        return true;
    }

    $n = 13;
    $ans = prime($n);

    if($ans == 1) 
        echo "The number $n is a prime number";
    else echo "The number $n is not a prime number";

?>