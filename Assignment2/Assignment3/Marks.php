<?php
    $subject = 5;


    function getGpa($marks) {
        if($marks >= 80 and $marks <= 100) {
            return 4.00;
        }
        else if($marks >= 75 and $marks < 80) {
            return 3.75;
        }
        else if($marks >= 70 and $marks < 75) {
            return 3.50;
        }
        else if($marks >= 65 and $marks < 70) {
            return 3.25;
        }
        else if($marks >= 60 and $marks < 65) {
            return 3.00;
        }
        else if($marks >= 55 and $marks < 60) {
            return 2.75;
        }
        else if($marks >= 50 and $marks < 55) {
            return 2.50;
        }
        else if($marks >= 45 and $marks < 50) {
            return 2.25;
        }
        else if($marks >= 40 and $marks < 45) {
            return 2.00;
        }
        else return 0.00;
        
    };

    $Marks = array(
        "CSE-1"=> 80,
        "CSE-2"=> 75,
        "CSE-3"=> 65,
        "CSE-4"=> 85,
        "CSE-5"=> 70
    );

    $cntGPA = (getGpa($Marks["CSE-1"]) + 
                getGpa($Marks["CSE-2"])  + 
                getGpa($Marks["CSE-3"]) + 
                getGpa($Marks["CSE-4"])+
                getGpa($Marks["CSE-5"]))/
                $subject;
    
    echo "The gpa of the student : $cntGPA";

?>