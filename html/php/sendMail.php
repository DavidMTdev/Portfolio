<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    extract($_POST);

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
        $to = "david.teixeira@gmail.com";
        $sujet = $name . " à contactez le site";
        $header = "From:" . $email;


        mail($to, $sujet, $message, $header);
    }
}
