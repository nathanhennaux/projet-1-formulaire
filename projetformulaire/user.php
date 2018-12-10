<?php

$options = array(
    'first_name'    => FILTER_SANITIZE_STRING,
    'last_name'     => FILTER_SANITIZE_STRING,
    'email'         => FILTER_VALIDATE_EMAIL,
    'sujets'        => FILTER_SANITIZE_NUMBER_INT,
    'pays'          => FILTER_SANITIZE_NUMBER_INT,
    'sexe'          => FILTER_SANITIZE_NUMBER_INT,
    'message'       => FILTER_SANITIZE_STRING
);
    

    $result = filter_input_array(INPUT_POST, $options);  

    if ($result != null AND $result != FALSE) {

        echo "Tous les champs ont été nettoyés !";
    
    } else {
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }

    foreach($result as $key => $value) 
    {
       $result[$key]=trim($result[$key]);
    }

    if ($result['sexe'] == 1){
        $result["sexe"] = "homme";
    }
    else if ($result["sexe"] == 2) {
        $result["sexe"] = "femme";
    }
    else {
        $result["sexe"] = "Error";
    }

    if ($result["pays"] == 1) {
        $result["pays"] = "Belgique";
    }
    else if ($result["pays"] == 2) {
        $result["pays"] = "USA";
    }
    else if ($result["pays"] == 3) {
        $result["pays"] = "Japon";
    }
    else if ($result["pays"] == 4) {
        $result["pays"] = "Enfer";
    }
    else {
        $result["pays"] = "Error";
    }


    echo $result['first_name'];
    echo '<br>';
    echo $result['last_name'];
    echo '<br>';
    echo $result['email'];
    echo '<br>';
    echo $result['sujets'];
    echo '<br>';
    echo $result['pays'];
    echo '<br>';
    echo $result['sexe'];
    echo '<br>';
    echo $result['message'];
    echo '<br>';


    if(!empty($_POST['sujets'])) {
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['sujets'] as $selected) { //$selected = key
            if ($selected == 1) {
                echo "<p>Html";
            }
            else if ($selected == 2) {
                echo "<p>Css";
            }
            else if ($selected == 3) {
                echo "<p>Php ";
        }

        }
    }else{
        echo "Autres";
    }
?>

