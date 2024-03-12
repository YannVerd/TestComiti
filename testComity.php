<?php

function Estimate(int $members, int $nbrSections = 0, string $fede = "Z")
{
    $total = 0;
    $sections = [];
    for ($i=0; $i < $nbrSections ; $i++) { 
        $sections[$i+1]= 5;
    }

    print("voici la liste des sections :\n");
    print_r($sections);

    /*------------------Gestion du nombres de membres----------------*/
    switch ($members) {
        case $members < 101:
            $total = 10;
            print("Calcul en fonction du nombre de membres cas 1 : ".$total." euros\n");
            break;
        case $members > 100 && $members < 201:
            $total = 0.10 * $members;
            print("Calcul en fonction du nombre de membres cas 2 : ".$total." euros\n");
            break;
        case $members > 200 && $members < 501:
            $total = 0.09 * $members;
            print("Calcul en fonction du nombre de membres cas 3 : ".$total." euros\n");
            break;
        case $members > 500 && $members < 1001:
            $total = 0.08* $members;
            print("Calcul en fonction du nombre de membres cas 4 : ".$total." euros\n");
            break;
        case $members > 1000 && $members < 10000:
            $total = 70 * (floor($members/1000));
            print("Calcul en fonction du nombre de membres cas 5 : ".$total." euros\n");
            break;
        default:
            $total = 1000;
            print("Calcul en fonction du nombre de membres cas 6 : ".$total." euros\n");
            break;
    }

    // calcul de la réduction
    $fede === 'G' ? $total -= $total * 0.15 : false;

    /*----------------------Gestion du nombre de sections-------------------*/
    $date = new DateTime();
    $currentMonth = $date->format('m');
    
    // application de la réduction du mois
    foreach($sections as $key => $values){
        $key % $currentMonth === 0 ? $sections[$key] = 3 : false;
    }

    print("Application du bonus du mois à la liste des sections :\n");
    print_r($sections);
    // ajustement des sections en fonction du nombre de membres
    if($nbrSections > 0){
        if($members > 1000){
            $key = array_search(5, $sections);
            if(!$key){
                array_pop($sections);
            }else{
                unset($sections[$key]);
            }
            print("une section est offerte grâce au nombre de membres\n");
        } 
    }
    // ajustement des sections en fonciton de la fédération
    if($fede === "N"){
        if(count($sections)> 3){
            for ($i=0; $i < 3; $i++) { 
                $key = array_search(5, $sections);
                if(!$key){
                    array_pop($sections);
                }else{
                    unset($sections[$key]);
                }
            }
            print("Votre affiliation a la Fédération vous offre 3 sections\n");
           
        }else{
            $sections = [];
            print("toutes les sections sont offertes\n");
        }
    
    }

    print("Modification de la liste en fonction des sections offertes :\n");
    print_r($sections);
    
    
   
    if(count($sections) > 0){
        $totalSections = array_sum($sections);
        $fede === "B" ? $totalSections -= $totalSections * 0.30: false;
        print("Le coût total des sections s'élève à : ".$totalSections." euros\n");
        $total += $totalSections;
    }

    /*-----------------------Gestion du total----------------------------*/
    print("coût par mois :".$total." euros\n");
    // calcul sur l'année et ajour de la TVA
    $total *=  12 * 1.20;
    print("coût à l'année : ".$total." euros\n");
    
}

Estimate(250, 3, "N");