<?php
// echo("Hello");
    $input = readline("Enter the number: ");

    if($input <= 100 && $input >= 90){
        echo("$input. Grade A.");
    }else if($input <= 89 && $input >= 80){
        echo("$input. Grade B.");
    }else if($input <= 79 && $input >= 70){
        echo("$input. Grade C.");
    }else if($input <= 69){
        echo("$input. Grade D.");
    }
?>