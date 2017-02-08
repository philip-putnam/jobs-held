<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Job.php';

    session_start();

    if (empty($_SESSION['jobs'])) {
        $_SESSION['jobs'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('root.html.twig');

    });

    $app->get("/view-job-history", function() use ($app) {

        return $app['twig']->render('view-job-history.html.twig');

    });



    return $app;
?>
