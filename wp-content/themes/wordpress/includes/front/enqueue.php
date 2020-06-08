<?php

    function ju_enqueue()
    {
        wp_register_style('ju_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

        wp_enqueue_style('ju_bootstrap');
    }