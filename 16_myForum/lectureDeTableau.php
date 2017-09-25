<?php
// $tableau =[
//     "Marcel",
//     ["prenom" => "Bernard", "nom" => "Laporte"],
//     ["animaux" =>   [
//                     ["chat", "domestique" =>"chien"]
//                     ]
//     ]
// ];

//Esayer d'accerder a la valeur valeur Marcel, Laporte et chien;

//var_dump($tableau);


// (1) var_dump($tableau[0]);
// (2) var_dump($tableau[1]['nom']);
// (3) **** var_dump($tableau[2]['animaux'][0]['domestique']);


$tableauBaseDeDonnées = [

    ["username" => "ensayofr", "email" => "ledebutant@gmail.fr"], 
    ["username" => "apocalypse", "email" => "jeanmo@gmail.fr"], 
];



// foreach($tableauBaseDeDonnées as $key => $tableau){
//     foreach($tableau as $key2 => $value){
//         if($key2=="email"){
//             var_dump($value);
//         }
//     }
// };

foreach($tableauBaseDeDonnées as $key =>$value){
    echo ($value ['email']);
};

?>


