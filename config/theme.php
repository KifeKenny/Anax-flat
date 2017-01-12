<?php
/**
 * Config-file for Anax, theme related settings, return it all as array.
 *
 */
return [

    /**
     * Base view to start render page from.
     */
    "view" => [
        "template" => "default/index",

        "data" => [
            // General
            "htmlClass"     => ["anax-flat"],
            "bodyClass"     => [],
            "lang"          => "sv",
            "charset"       => "utf-8",
            "title_append"  => " | Lag och ordning AB",
            "favicon"       => "img/favicon/logo_jurist.jpg",

            // Style and stylesheets
            // "stylesheets" => ["css/default.min.css"],
            //"stylesheets" => ["css/style.min.css"],
            "stylesheets" => [
                "css/style.min.css"
            ],
            "styleInline" => null,

            // JavaScript
            // "javascripts" => [],
            "javascripts" => ["js/responsive-menu.js"],
        ],
    ],



    /**
     * Add default views to always include.
     */
    "views" => [
        // [
        //     "region" => "header",
        //     "template" => "default/image",
        //     "data" => [
        //         "class" => "logo-1",
        //         "src" => "img/favicon/favicon_128x128.png",
        //         "alt" => "Logo",
        //     ],
        //     "sort" => 1
        // ],
        [
            "region" => "header",
            "template" => "default/header",
            "data" => [
                "homeLink"      => "",
                "siteLogoText"  => "Lag och ordning AB",
                "siteLogoTextIcon" => "img/favicon/logo_jurist.jpg",
                "siteLogoTextIconAlt" => "Small logo",
                "siteLogo"      => null, //"img/anax.png",
                "siteLogoAlt"   => null, //"Anax Logo",
                "siteTitle"     => null, //"Anax PHP framework",
                "siteSlogan"    => null, //"Reusable modules for web development"
            ],
            "sort" => 2
        ],

        [
            "region" => "profile",
            "template" => "default/navbar-max",
            "data" => [],
            "sort" => -1
        ],

        [
            "region" => "navbar2",
            "template" => "default/navbar",
            "data" => [],
            "sort" => 1
        ],
        [
            "region" => "footer",
            "template" => "default/columns",
            "data" => [
                "class"  => "footer-column",
                "columns" => [
                    [
                        "contentRoute" => "block/footer-col-1",
                    ],
                    [
                        // "contentRoute" => "block/footer-col-2",
                        "contentRoute" => "block/byline",
                    ],
                    [
                        "contentRoute" => "block/footer-col-3",
                    ]
                ]
            ],
            "sort" => 1
        ],
        [
            "region" => "footer",
            "template" => "default/block",
            "data" => [
                "class" => "site-footer",
                "contentRoute" => "block/footer",
            ],
            "sort" => 2
        ],
    ],
];
