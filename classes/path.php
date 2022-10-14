<?php

class path{

    private static $initialPath = null;

    const FILE =  __FILE__;
    const CLASSES = 'classes/';
    const VIEWS = 'views/';
    const ASSETS = 'assets/';

    public static function absolutePath(){
        if(is_null(self::$initialPath)){
            $FILE = str_replace('\\','/',self::FILE);
            self::$initialPath = explode(self::CLASSES,$FILE);
        }
        return self::$initialPath[0];
    }

    public static function getClassesPath(){
        return self::absolutePath() . self::CLASSES;
    }

    public static function getViewsPath(){
        return self::absolutePath() . self::VIEWS;
    }

    public static function getRootPath() {
        return self::absolutePath();
    }

    public static function getAssetsPath() {
        return self::absolutePath(). self::ASSETS;
    }
    
}



?>