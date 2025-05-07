<?php

    echo "Enter a number: ";
    $number = fgets(STDIN);
    if($number>0 && $number%2==0){
        echo " $number is Positive and Even";
    }
    elseif($number>0 && $number%2!=0){
        echo " $number is Positive and Odd";
    }
    elseif($number < 0 && $number%2!=0){
        echo " $number is Negative and Odd";
    }
    elseif($number < 0 && $number%2== 0){
        echo " $number is Negative and Even";
    }
   
        else{
        echo "You have entered a zero";
    }


?>