<?php
  require_once  "twig/lib/Twig/Autoloader.php";
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
    ));
    
    $lang = 'en';
    if(isset($_POST["language"]))
        $lang = $_POST["language"];
    echo $twig->render($lang.'_index.html');
    