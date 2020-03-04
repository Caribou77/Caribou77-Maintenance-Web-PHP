
<?php

//print_r($_POST);

//echo $_POST['email'];

$message = $_POST['message'];

mail ('clement.devoucoux@lilo.org' , 'un nouveau message de votre site Lafayette', $message);

?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
    Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="clementdevoucoux.works">ici
    </a></p>