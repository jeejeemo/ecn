<?php
session_start();
require('service/operations.php');

if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['langue'])) {
    // var_dump($_POST);
    $prenom = $_POST['prenom']; 
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $langue = $_POST['langue'];


    $result = addStudent($prenom,$nom, $age,$email,$langue);
    if($result > 1){
        $var = "control=success";
    }else{
        $var = "control=failure";
    }
    header("location: view/inscription.php?$var");
    die();
}
