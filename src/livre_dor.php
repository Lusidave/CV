<?php
require_once 'connec.php';

if (@$_POST['poster'] <> '') {
    $query = 'INSERT INTO livredor VALUES (NULL, :pseudo, :message)';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':pseudo', $_POST['pseudo'], \PDO::PARAM_STR);
    $statement->bindValue(':message', $_POST['message'], \PDO::PARAM_STR);
    $statement->execute();
}

$query = "SELECT * FROM livredor ORDER BY id DESC LIMIT 3";
$statement = $pdo->query($query);
$cvLuzi = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="essai">
<div class="">
    <form id="form-dor" method="post" action="#recommandations">

        <div class="formDor">

            <div id="pseudo" class="form-or">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" class="livredor" placeholder="Votre pseudo" value="">
                <p class="comments"></p>
            </div>

            <div class="form-or">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="livredor" placeholder="Votre message" rows="4"></textarea>
            </div>

            <div id="button3" class="button-or">
                <input type="submit" id="poster" name="poster" class="button1" value="Envoyer">
            </div>

        </div>
    </form>
</div>

<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php
        $i=0;
        foreach ($cvLuzi as $key => $value)
        {
            if($i==0) $classactive="active";

            echo '<div class="item '.$classactive.'">';
                    echo "<h3>";
                        echo $value["pseudo"]."<br/>";
                        echo $value["message"]."<br/>";
                    echo "</h3>";
                echo "</div>";
                $i++;
            $classactive="";
        }
        ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
        <span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
        <span class="glyphicon glyphicon-chevron-right"></span></a>

</div>
</div>






