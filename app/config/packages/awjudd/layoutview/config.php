<?php
return array (

    /**
     * Contains all of the layout-specific configuration values
     * 
     * @var array
     */
    'layout' => array (

        /**
         * The layout that will be used to fall back on if the selected doesn't exist.
         * 
         * @var string
         */
        'fallback' => 'base',

        /**
         * The layout that will be the first choice to be used.
         * 
         * @var string
         */
        'selected' => 'base',
    ),

    /**
     * Contains all of the namespaces in order that the view should look at
     * before actually rendering.
     * 
     * @var array
     */
    'namespaces' => array (
        'qg::',
        /*
         * Should always keep a blank one here to search in no namespaces.
         */
        '',
    ),
);