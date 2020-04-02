<?php
  /*  $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo = "lusidave@gmail.com";

     if ($_SERVER["REQUEST_METHOD"] == "POST") // ce IF sera executé seulement à partir où la personne clique sur le bouton Envoyer //
    {
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;
        $emailText = "";


        if(empty($firstname))
        {
            $firstnameError = "Je veux connaitre ton prénom !";
            $isSuccess = false;
        }
        else {
            $emailText .= "FirstName: $firstname\n";
        }
        if(empty($name))
        {
            $nameError = "Et oui je veux tout savoir. Même ton nom ;-)";
            $isSuccess = false;
        }
        else {
            $emailText .= "Name: $name\n";
        }
        if(!isEmail($email))
        {
            $emailError = "T'essaies de me rouler ? C'est pas un email ça !";
            $isSuccess = false;
        }
        else {
            $emailText .= "Email: $email\n";
        }
        if(!isPhone($phone))
        {
            $phoneError = "Que des chiffres et des espaces, stp...";
            $isSuccess = false;
        }
        else {
            $emailText .= "Phone: $phone\n";
        }
        if(empty($message))
        {
            $messageError = "Qu'est ce que tu veux me dire ?";
            $isSuccess = false;
        }
        else {
            $emailText .= "Message: $message\n";
        }

        if($isSuccess)
        {
            $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
            mail($emailTo, "Un message de votre site", $emailText , $headers);
            $firstname = $name = $email = $phone = $message = "";

        }
    }

    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/", $var);
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }



    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['monfichier']['size'] <= 1000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}


*/
require_once 'connec.php';

$query = "SELECT * FROM userForm";
$statement = $pdo->query($query);
$cvLuzi = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="contact">
<div class="container">
    <div class="red-divider"></div>
    <div class="heading">
        <h2>Contactez-moi</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <form enctype="multipart/form-data" id="contact-form" method="post" action="#contact" role="form">
                 <?php /*echo htmlspecialchars($_SERVER['PHP_SELF']);*/ ?>
                <div class="row">


                    <div class="col-md-6">
                        <label for="firstname">Prénom<span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value=""> <?php /*echo $firstname;*/ ?>
                        <p class="comments"></p>
                        <?php /*echo $firstnameError;*/ ?>
                    </div>

                    <div class="col-md-6">
                        <label for="name">Nom<span class="blue"> *</span></label>
                        <input type="text" id="name" name="nom" class="form-control" placeholder="Votre nom" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="email">Email<span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-12">
                        <label for="message">Message<span class="blue"> *</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                        <p class="comments"></p>
                    </div>

                    <div id="sendfile" class="col-md-12">
                        <input type="file" name="sendfile">

                    </div>

                    <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                    </div>

                    <div class="col-md-12">
                       <input type="submit" id="send" name="send" class="button1" value="Envoyer">
                    </div>
                </div>
               <!-- <p class="thank-you" >Votre message a bien été envoyé. Merci de m'avoir contacté :)</p> -->
               <!-- style="display:<?php /*if($isSuccess) echo 'block'; else echo 'none';*/?>" -->
            </form>
        </div>
    </div>

</div>
</section>
<div id="thanks">



<?php

if(@$_POST['send']<>''){


    echo "Votre message a bien été envoyé " . $_POST['firstname'] . " " . $_POST["nom"] . " Merci de m'avoir contacté ! :) "."<br/>";
    echo    "Je reviendrai vers vous via votre adresse mail " . $_POST['email'];


    $query = 'INSERT INTO userForm VALUES (NULL, :firstname, :nom, :email, :phone, :message)';
    $statement = $pdo->prepare($query);

    $statement->bindValue(':firstname', $_POST['firstname'], \PDO::PARAM_STR);
    $statement->bindValue(':nom', $_POST['nom'], \PDO::PARAM_STR);
    $statement->bindValue(':email', $_POST['email'], \PDO::PARAM_STR);
    $statement->bindValue(':phone', $_POST['phone'], \PDO::PARAM_INT);
    $statement->bindValue(':message', $_POST['message'], \PDO::PARAM_STR);

    $statement->execute();
}
?>
</div>
