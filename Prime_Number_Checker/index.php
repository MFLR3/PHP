<?php
    # Prime number checker
    function prime_number_checker($number){
        $count = 0;
        for($i = 1; $i < $number + 1; $i++){
            if($number % $i == 0){
                $count += 1;
            }                         
        }
        if($count == 2){
            echo $number . ".   Prime.";
        }                
        else{
            echo $number . ".   Not Prime.";
        }    
    }

    # In range of 100
    foreach (range(1, 100) as $i) {
        echo prime_number_checker($i) . "<br>";
    }
?>
