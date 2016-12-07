<?php
namespace App\Table;

use App\App;

class Articles {

    public static function getLesArticles() {
        return App::getDatabase()->query('SELECT * FROM articles', __CLASS__);
    }

    public static function getUnArticle($id) {
        return App::getDatabase()->prepare('SELECT * FROM articles WHERE id = ?', $id, __CLASS__, true);
    }

    public function __get($key) { //trouver la fonction
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;

    }

    public function getUrl() {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait() {
        $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>';
        $html .= '<p><a href="' .$this->getUrl() .'">Voir la suite</a></p>';
        return $html;
    }

}

