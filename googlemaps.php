<?php

$app->get('/property/googlemaps', function() use ($app) {
   if (!$_SESSION['user']) {
        $app->render("access_denied.html.twig");
        return;
    }
   
   $propertyList = DB::query("SELECT * FROM property");
    if (!$propertyList) {
        $app->render("/not_found.html.twig");
        return;
    }
    $app->render("/property/google_maps_list.html.twig", array('list'=>$propertyList));
});

$app->get('/property/googlemap/:id', function($id) use ($app) {
   if (!$_SESSION['user']) {
        $app->render("access_denied.html.twig");
        return;
    }
    $property = DB::queryFirstRow("SELECT * FROM property WHERE propertyId=%d" , $id);
    if (!$property) {
        $app->render("/not_found.html.twig");
        return;
    }
    $app->render("/property/google_maps.html.twig", array('property'=>$property));
});
