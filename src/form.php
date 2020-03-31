<?php
    $firstname = $name = $email = $phone = $message = "";
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



?>
<section id="contact">

<div class="container">
    <div class="red-divider"></div>
    <div class="heading">
        <h2>Contactez-moi</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <form enctype="multipart/form-data" id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
                <div class="row">


                    <div class="col-md-6">
                        <label for="firstname">Prénom<span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                        <p class="comments"><?php echo $firstnameError; ?></p>
                    </div>

                    <div class="col-md-6">
                        <label for="name">Nom<span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
                        <p class="comments"><?php echo $nameError; ?></p>
                    </div>

                    <div class="col-md-6">
                        <label for="email">Email<span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
                        <p class="comments"><?php echo $emailError; ?></p>
                    </div>

                    <div class="col-md-6">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
                        <p class="comments"><?php echo $phoneError; ?></p>
                    </div>

                    <div class="col-md-12">
                        <label for="message">Message<span class="blue"> *</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"><?php echo $message; ?></textarea>
                        <p class="comments"><?php echo $messageError; ?></p>
                    </div>

                    <div id="sendfile" class="col-md-12">
                        <input type="file" name="sendfile">

                    </div>

                    <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                    </div>

                    <div class="col-md-12">
                       <input type="submit" class="button1" value="Envoyer">
                    </div>


                </div>
                <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none';?>">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
            </form>
        </div>
    </div>

</div>
</section>
