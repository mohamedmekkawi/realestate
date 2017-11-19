<?php
$app->get('/property/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render("access_denied.html.twig");
        return;
    }
    $property = DB::queryFirstRow("SELECT * FROM property WHERE propertyId=%d AND userId=%i", $id, $_SESSION['user']['userId']);
    if (!$property) {
        $app->render("/not_found.html.twig");
        return;
    }
    $app->render("/property/property_delete.html.twig", array('p' => $property));
});
$app->post('/property/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render("access_denied.html.twig");
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->render('/not_found.html.twig');
        return;
    }
    DB::delete('property', "propertyId=%i AND userId=%i", $id, $_SESSION['user']['userId']);
    if (DB::affectedRows() == 0) {
        $app->render('/not_found.html.twig');
    } else {
        $app->render('/property/property_delete_success.html.twig');
    }
});