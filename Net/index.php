<?php
	require_once  "twig/lib/Twig/Autoloader.php";
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
    ));
    
    // $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    // if(isset($_POST["language"]))
    //   $lang = $_POST["language"];
    $lang = isset($_POST['language']) ? $_POST['language'] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    echo $twig->render('index_'.$lang.'.html.twig');
?>