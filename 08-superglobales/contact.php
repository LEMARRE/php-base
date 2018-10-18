<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <h1>Formulaire de contact</h1>
    <form method="POST">
        <div class="form-group">
            <label for="email" >Adresse e-mail</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo !empty($_POST) ? $_POST['email'] : ''; ?>">
        </div>

        <div class="form-group">
            <label for="subject" >Sujet</label>
        <input class="form-control" type="text" name="subject" id="subject" value="<?php echo !empty($_POST) ? $_POST['subject'] : ''; ?>">
        </div>

        <div class="form-group">
            <label for="message" >Message</label>
            <textarea class="form-control" name="message" id="message" value="<?php echo !empty($_POST) ? $_POST['message'] : ''; ?>"></textarea>
        </div>
    
        <button class="btn btn-primary form-control" id="Calculate">Envoyer</button>
    </form>
</div>

    <?php

        $email = null;
        $subject = null;
        $message = null;

        if (!empty($_POST)){
            $isValide = false;
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $isValide = false;
                echo('Cet email n\'est pas valide'.'<br/>');
            }
            if (strlen($subject) == 0) {
                $isValide = false;
                echo('Le sujet doit être renseigné'.'<br/>');
            }
            if (strlen($message) < 15) {
                $isValide = false;
                echo('Le message doit contenir au moins 15 caractères'.'<br/>');
            }
            if ($isValide) {
                echo 'Envoi du mail';
        }
    }

?>

</body>
</html>