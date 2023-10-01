<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/product/new' => [[['_route' => 'new_product', '_controller' => 'App\\Controller\\DummyProductController::new'], null, null, null, false, false, null]],
        '/specialPrice/new' => [[['_route' => 'new_special_price', '_controller' => 'App\\Controller\\DummyProductController::newSpecialPrice'], null, null, null, false, false, null]],
        '/product/administration' => [[['_route' => 'app_product_administration_index', '_controller' => 'App\\Controller\\ProductAdministrationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/administration/new' => [[['_route' => 'app_product_administration_new', '_controller' => 'App\\Controller\\ProductAdministrationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\ProductCatalogController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/checkout/([^/]++)(*:60)'
                .'|/product/(?'
                    .'|administration/([^/]++)(?'
                        .'|(*:105)'
                        .'|/edit(*:118)'
                        .'|(*:126)'
                    .')'
                    .'|([^/]++)(*:143)'
                .')'
                .'|/browse(?:/([^/]++))?(*:173)'
                .'|/api/products/(\\d+)(*:200)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\CartController::checkout'], ['cartId'], null, null, false, true, null]],
        105 => [[['_route' => 'app_product_administration_show', '_controller' => 'App\\Controller\\ProductAdministrationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        118 => [[['_route' => 'app_product_administration_edit', '_controller' => 'App\\Controller\\ProductAdministrationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        126 => [[['_route' => 'app_product_administration_delete', '_controller' => 'App\\Controller\\ProductAdministrationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        143 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        173 => [[['_route' => 'app_browse', 'slug' => null, '_controller' => 'App\\Controller\\ProductCatalogController::browse'], ['slug'], null, null, false, true, null]],
        200 => [
            [['_route' => 'api_products_get_one', '_controller' => 'App\\Controller\\ProductController::getProduct'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
