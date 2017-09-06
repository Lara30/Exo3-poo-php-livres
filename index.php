<?php
require 'livre.php';

$email=$_POST["email"];
$float=$_POST["textarea"];

$livre = new Livre($_POST);
//créer les champs
echo $form->startform();
echo $form->input($email);
echo $form->select('Polynésie','Bali','Thailande');
//champ de soumission
echo $form->submit('Visiter');
echo $form->textarea($float);
echo $form->radiobutton();
echo $form->checkbox();
echo $form->endform();

$link = new Html();
echo $link->meta();
echo $link->css();
echo $link->jquery();
echo $link->jqueryui();
echo $link->scriptjs();
echo $link->image("./index.jpeg");
echo $link->a('https://img1.grazia.fr/var/grazia/storage/images/lifestyle/insolite/comptoir-des-voyages-et-instagram-nous-font-gagner-un-tour-du-monde-809304/13309039-1-fre-FR/Comptoir-des-Voyages-et-Instagram-nous-font-gagner-un-tour-du-monde_exact1900x908_l.jpg');

//Validator::
$validator = new Validator();
echo $validator->isValidMail($email);
//echo $validator->isInt($essai);
echo $validator->isValidFloat($float);