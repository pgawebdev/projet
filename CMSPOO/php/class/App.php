<?php
class App
{
    static function start()
    {
        spl_autoload_register("App::chargerCodeClass");

        App::afficherPage();

    }
    
    static function afficherPage()
    {

        $uri = $_SERVER["REQUEST_URI"];

        extract(parse_url($uri));
        extract(pathinfo($path));

        $templateActif = "defaut";
        
        if($filename == "api")
        {
            $templateActif = "api";
        }
        if($filename == "admin")
        {
            $templateActif = "admin";
        }

        $tabResult = Model::read("pages","filename", $filename);

        foreach($tabResult as $tabLigne)
        {
            extract($tabLigne);
        }

        require_once "php/view/template-$templateActif.php";
    }


    static function chargerCodeClass($className)
    {
        

        require_once "php/class/$className.php";
    }
}