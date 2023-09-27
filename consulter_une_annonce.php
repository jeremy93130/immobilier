<?php
require_once("./inc/header.php");
require_once("./models/fonction.php");
$consultList = consult($_GET["id"]);
?>

<?php foreach ($consultList as $list) { ?>
    <div class="container">
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
                <p class="card-text">
                    Type :
                    <?= $list["type"]; ?>
                </p>
                <p class="card-text">
                    Prix :
                    <?= $list["price"]; ?>
                </p>
            </div>
            <div>
                <form action="./models/reservation.php" method="POST">
                    <input type="hidden" name="annonce_id" value="<?= $list["id"]; ?>">
                    <div>
                        <textarea name="message" id="message" cols="35" rows="5"></textarea>
                    </div>
                    <button Type="submit" name="book">Je reserve</button>
                </form>
            </div>
        </div>
    </div>

    </div>

<?php } ?>