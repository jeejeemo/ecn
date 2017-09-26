<?php
session_start();
require 'flight/Flight.php';
require 'autoloader.php';

Flight::render('header', array('heading' => 'Hello'), 'header');
Flight::render('footer', array('tests' => 'World'), 'footer');

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/login', function(){
    $promotion = new Promotion();
    $promotion->setTitre("Radeon");
    Flight::render('login',array(
        'carte' => $promotion
    ));
});

Flight::route('POST /newProductService',function(){

//    var_dump($_POST);
    $nom = Flight::request()->data['nom'];
    $description = Flight::request()->data['description'];
    $couleur = Flight::request()->data['couleur'];

    var_dump($nom);
    var_dump($description);
    var_dump($couleur);

//    $bdd = new BddManager();
    //Pour les messages d'erreurs et feedback
    //utilisez le bon vieux $_GET et ses paramètres dans l'URL
    //
    Flight::redirect('login?erreur=1');
    //Remarques les variables globales restent accessibles
    // $_GET, $_POST
});






                /** /produit/145/alfonso
                 * Si les paramètres ne sont pas présent
                 * il y aura une erreur
                 */
Flight::route('/produit/@produit/@promotion',function($id,$name){
    //Ceci au lieu de faire des GET
    echo $id;
    echo $name;
});
    //On peut combiner l'url avec les regex
Flight::route('/detail/@id:[0-9]{3}',function($id){
    echo "il y a un detail du produit avec id ".$id;
});











Flight::route('/login', function(){
    Flight::render('login', array("nom"=>"Alfonso"));
});



Flight::route('/produit',function(){
    $bdd = new BddManager();
    $produit = $bdd->getProduitById(1);

    Flight::render("produit", array("produit"=>$produit));
});



Flight::start();