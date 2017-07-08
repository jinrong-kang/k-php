<?php
	require_once  "../twig/lib/Twig/Autoloader.php";
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('../views');
    $twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
    ));
    // echo $twig->render('sub1.html');
    echo $twig->render('sub1.html');
?>