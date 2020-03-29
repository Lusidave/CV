<?php
    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);

        if(empty($firstname))
        {
            $firstnameError = "Je veux connaitre ton prénom !";
        }
        if(empty($name))
        {
            $nameError = "Et oui je veux tout savoir. Même ton nom ;-)";
        }
        if(empty($message))
        {
            $messageError = "Qu'est ce que tu veux me dire ?";
        }

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

?>

<div class="container">
    <div class="divider"></div>
    <div class="heading">
        <h2>Contactez-moi</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
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
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-12">
                        <label for="message">Message<span class="blue"> *</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"><?php echo $message; ?></textarea>
                        <p class="comments"><?php echo $messageError; ?></p>
                    </div>

                    <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                    </div>

                    <div class="col-md-12">
                       <input type="submit" class="button2" value="Envoyer">
                    </div>


                </div>
                <p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
            </form>
        </div>
    </div>

</div>
