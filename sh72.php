<?php

    $age = readline("What is your age?: \n");
    $ward = readline("Enter your polling ward: \n");
    $has_pvc = readline("Do you have a PVC?: \n");

    if ($age < 18) {
	die("You are underage. You have to be at least 18 to vote\n");
    }

    if (strtolower($has_pvc) != 'yes') {
	    die("You must possess a PVC to be able to vote!\n");

    }

    if ($ward != 20 && $ward != 020) {
	    die("You are in the wrong ward. Please visit ward $ward to cast your vote\n");
    }

    echo "Voter eligible to vote";

?>
