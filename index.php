<?php
    require_once __DIR__ . '/Classes/ClientePremium.php';
    require_once __DIR__ . '/Classes/Prodotto.php';

    $utente1 = new Cliente('Franco', 'Franchi', '****4578', '01/25');
    // var_dump($utente1);

    $utentepremium1 = new ClientePremium('Paolo', 'Paoli', '****4521', '02/18');
    $utentepremium1->getSconto();
    //var_dump($utentepremium1);

    $prodotto1 = new Prodotto('Royal Canin Maxi', 'Cane', '2', 'umido', 50);
    //var_dump($prodotto1);
    $prodotto2 = new Prodotto('Catit', 'Gatto', '1', 'Tiragraffi', 40);
    //var_dump($prodotto2);

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Shop</title>
    <style>
        .dropdown{
            list-style-type: none !important;
        }
        ul{
            list-style-type: none !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Shop</a>
      <form class="d-flex">
      <li class="nav-item dropdown dropstart">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profilo
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?php echo $utentepremium1->getFullNome() ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Numero carta: <?php echo $utentepremium1->getCarta() ?></a></li>
            <li>
                <a class="dropdown-item" href="#">Scadenza carta: </br>
                    <?php
                        try{
                            $utentepremium1->setDatacarta('12/18');
                        }catch(Exception $e) {
                            echo 'Errore! ' . $e->getMessage();
                        }
                        echo $utentepremium1->getDatacarta();
                    ?>
                </a>
            </li>
          </ul>
        </li>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row my-5">
        <div class="col-6 text-center">
            <h2><?php echo $prodotto1->getNome(); ?></h2>
            <ul>
                <li>Adatto per: <?php echo $prodotto1->getRazza() ?></li>
                <li>Anni: <?php echo $prodotto1->getFasciaeta() ?></li>
                <li>Tipologia: <?php echo $prodotto1->getTipologia() ?></li>
                <li>Prezzo: <?php echo "{$prodotto1->getPrezzo()}$  Sconto Premium: {$utentepremium1->getSconto()}" ?></li>
            </ul>
        </div>
        <div class="col-6 text-center">
            <h2><?php echo $prodotto2->getNome(); ?></h2>
            <ul>
                <li>Adatto per: <?php echo $prodotto2->getRazza() ?></li>
                <li>Anni: <?php echo $prodotto2->getFasciaeta() ?></li>
                <li>Tipologia: <?php echo $prodotto2->getTipologia() ?></li>
                <li>Prezzo: <?php echo "{$prodotto2->getPrezzo()}$  Sconto Premium: {$utentepremium1->getSconto()}" ?></li>
            </ul>
        </div>
    </div>
</div>
<script src="js/script.js" ></script>
</body>
</html>



