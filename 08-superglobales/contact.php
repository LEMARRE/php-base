<div class="container">

    <form method="POST">
        <div class="row">
            <label for="email" >Adresse e-mail</label>
            <input type="email" name="email" id="email" value="<?php echo !empty($_POST) ? $_POST['email'] : ''; ?>">
        </div>
        <br/>
            <div class="row">
            <label for="subject" >Sujet</label>
        <input type="text" name="subject" id="subject" value="<?php echo !empty($_POST) ? $_POST['subject'] : ''; ?>"">
        </div>
        <br/>
        <div class="row">
            <label for="message" >Message</label>
            <textarea name="message" id="message" value="<?php echo !empty($_POST) ? $_POST['message'] : ''; ?>">
            </textarea>
        </div>
        <br/>
        <br/>
    
    
        <button id="Calculate">Envoyer</button>

    </form>
</div>

<?php


if (!empty($_POST)){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Cet email n\'est pas valide');
}

if (strlen($subject) == 0) {
    exit('Le sujet doit être renseigné');
}

if (strlen($message) < 15) {
    exit('Le message doit contenir au moins 15 caractères');
}

}

?>