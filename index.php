<?php
    require_once __DIR__ . '/Classes/ClientePremium.php';
    require_once __DIR__ . '/Classes/Prodotto.php';

    $utente1 = new Cliente('Franco', 'Franchi', 'n.25453', '01/25');
    var_dump($utente1);

    $utentepremium1 = new ClientePremium('Paolo', 'Paoli', 'n.77576', '02/24');
    $utentepremium1->getSconto();
    var_dump($utentepremium1);

    $prodotto1 = new Prodotto('Royal Canin Maxi', 'Cane', '2', 'umido', 50);
    var_dump($prodotto1);
    $prodotto2 = new Prodotto('Catit', 'Gatto', '1', 'Tiragraffi', 40);
    var_dump($prodotto2);

    try{
        $utente1->setDatacarta('18/24');
    }catch(Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }
    echo $utente1->getDatacarta();
    $data = new DateTime();
    var_dump($data);
?>