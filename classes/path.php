<?php
//déclaration de la class path
class path{

    private static $initialPath = null;
//déclaration des constante 
//on déclare également le __FILE__ ici pour le réutiliser dans la fonction absolutePath
    const FILE =  __FILE__;
    const CLASSES = 'classes/';
    const VIEWS = 'views/';
    const ASSETS = 'assets/';

    //permet d'avoir le chemin absolu qu'on va réutilliser dans toute nos fonction
    public static function absolutePath(){
        if(is_null(self::$initialPath)){
            //on remplace les backslash par des slash pour ne pas avoir de soucis (windows)
            $FILE = str_replace('\\','/',self::FILE);
            self::$initialPath = explode(self::CLASSES,$FILE);
        }
        return self::$initialPath[0];
    }
    //permet d'avoir le chemin vers le dossier classes
    public static function getClassesPath(){
        return self::absolutePath() . self::CLASSES;
    }
    //permet d'avoir le chemin vers le dossier views
    public static function getViewsPath(){
        return self::absolutePath() . self::VIEWS;
    }
    //permet d'avoir le chemin vers le dossier racine du projet
    public static function getRootPath() {
        return self::absolutePath();
    }
    //permet d'avoir le chemin vers le dossier assets 
    public static function getAssetsPath() {
        return self::absolutePath(). self::ASSETS;
    }
    
}



?>