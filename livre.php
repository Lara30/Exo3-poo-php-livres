<?php
//Créer une classe **Livre** avec les attributs suivants : **titre**, **auteur**, **nombre de pages** et **prix**.
//Cette classe contiendra deux constructeurs :
//Un constructeur qui prend en paramètre le titre, l’auteur et le nombre de pages.
//Un deuxième constructeur qui a un paramètre de plus qui est le prix.
class Livre
{
private int numero:
string, genre, titre
}

    public function startform(){
        return ('<form action="#" method="post">');
    }
    public function input(){
        return ('<input placeholder="mail" type="text" name="email" value=""><br>');
    }
    public function select($option1, $option2, $option3){
        return ('<select value="">
    <option value="">'.$option1.'</option>
    <option value="">'.$option2.'</option>
    <option value="">'.$option3.'</option>
    </select><br>');
    }
    public function submit($button){
        return ('<button type="submit">'.$button.'</button><br>');
    }
    public function textarea($float){
        return ('<textarea placeholder=""value="" name="textarea"></textarea><br>');
    }
    public function radiobutton(){
        return ('<input type="radio" value=""><br>');
    }
    public function checkbox(){
        return ('<input type="checkbox" value="">');
    }
    public function endform(){
        return ('</form>');
    }
}

//Créer une class Html qui va générer différents éléments html :

class Html{
    public function meta(){
        return ('<meta charset="utf-8">');
    }
    public function css(){
        return ('<link rel="stylesheet" href="style.css">');
    }
    public function jquery(){
        return ('<script src="jquery.js"></script>');
    }
    public function jqueryui(){
        return ('<script src="jquery-ui.min.js"></script>');
    }
    public function scriptjs(){
        return ('<script src="script.js"></script>');
    }
    public function image($image){
        return ('<button type="submit">'.$image.'Image</button>');
    }
    public function a($lien, $nomlien){
        return ('<a href="'.$lien.'">'.$nomlien.'Lien</a>');
    }
}