<?php
require_once("./inc/header.php");
require_once("./models/fonction.php");
$adList = adList();
?>

<div class="d-flex flex-wrap justify-content-center">
    <?php foreach ($adList as $list) { ?>
        <?php if ($list["reservation_message"] == null) { ?>
            <div>
                <div class="card d-flex flex-wrap" style="width: 18rem;">
                    <div class="card-body text-center">
                        <p class="card-text">
                            Titre de l'annonce : <br>
                            <?= $list["title"]; ?>
                        </p>
                        <p class="card-text">
                            Description de l'annonce: <br>
                            <?= $list["description"]; ?>
                        </p>
                        <p class="card-text">
                            Ville : <br>
                            <?= $list["city"]; ?>
                        </p>
                        <p class="card-text">
                            Code Postal :
                            <?= $list["postal_code"]; ?>
                        </p>
                        <a href="./consulter_une_annonce.php?id= <?= $list["id"]; ?>">Consulter cette annonce</a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="d-flex">
                <div class="card d-flex flex-wrap" style="width: 18rem;">
                    <div class="card-body text-center bg-dark text-white">
                        <p class="card-text">
                            Titre de l'annonce : <br>
                            <?= $list["title"]; ?>
                        </p>
                        <p class="card-text">
                            Description de l'annonce: <br>
                            <?= $list["description"]; ?>
                        </p>
                        <p class="card-text">
                            Ville : <br>
                            <?= $list["city"]; ?>
                        </p>
                        <p class="card-text">
                            Code Postal :
                            <?= $list["postal_code"]; ?>
                        </p>
                    </div>
                    <label for="reserve text-center">Reservé</label>
                </div>
            </div>
        <?php }
    } ?>
</div>