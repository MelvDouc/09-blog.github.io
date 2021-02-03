<?php

namespace App\Form;

class ArticleForm {

    public function getValue($index) {
        if(isset($this->donnees[$index])) {
            return $this->donnees[$index];
        } else{
            return null;
        }
    }

    public function entourer($contenu) {
        return '<div class="form-group">' . $contenu . '</div>';
    }

    /**
     * @param string $type Type de l'input
     * @param string $name Attribut name de l'input
     */
    public function input($nom, $type) {
        return $this->entourer('<label class="form-group">' . ucfirst($nom) . '</label> <input type="'.$type.'" name="' . $nom . '" value="' . $this->getValue($nom) . ' " class="form-control my-2">');
    }

    public function textarea($nom) {
        return $this->entourer('<label class="form-group">' . ucfirst($nom) . '</label> <textarea name="' . $nom . '" value="' . $this->getValue($nom) . ' " class="form-control my-2" row="5"></textarea>');
    }

    /**
     * @param string $name Nom du champ de la bdd
     * @param string $param1 Option possible 
     * @param string $param2 Option possible
     * @return mixed Renvoie un champ de formulaire de type select
     */
    public function select($name, $param1, $param2) {
        return $this->entourer('
        <label class="form-label text-capitalize" for="'.$name.'">'.$name.'</label>
        <select class="form-select" name="'.$name.'">
            <option value="">- catégorie -</option>
            <option value="1">'.$param1.'</option>
            <option value="2">'.$param2.'</option>
        </select>
        ');
    }

    public function submit($value) {
        echo '<div class="col-12 text-end"><button type="submit" name="' . $value . '" class="btn btn-primary my-3">' . $value . '</button></div>';
    }

}