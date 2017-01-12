<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Home page")
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("blogg")
            ],
            "tema" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("tema"),
                "title" => t("tema")
            ],
            "theme-selector" => [
                "text"  => t("theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("theme-selector")
            ],
        ],
    ],

    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Home page")
            ],
            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "blogg" => [
                "text"  => t("blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("blogg")
            ],
            "tema" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("tema"),
                "title" => t("tema")
            ],
            "theme-selector" => [
                "text"  => t("theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("theme-selector")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
