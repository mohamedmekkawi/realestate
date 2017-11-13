<?php

$app->get('/property/search', function() use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render("access_denied.html.twig");
        return;
    }
    $app->render('/property/search_property.html.twig');
});
$app->post('/property/search', function() use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render("access_denied.html.twig");
        return;
    }
    $search = $app->request()->post('search');
    $values = array('search' => $search);
    if (isset($_GET['location'])) {
        // Checkbox is selected
        $values = DB::query('SELECT * from property WHERE latitude LIKE %ss AND longitude LIKE %ss', $search, $search);
    }
    if (isset($_GET['price'])) {
        // Checkbox is selected
        $values = DB::query('SELECT * from property WHERE price LIKE %ss', $search);
    }    
    $app->render('/property/search_property.html.twig', array('v' => $values));
});