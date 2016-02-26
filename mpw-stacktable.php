<?php
/*
Plugin Name: MPW Stacktable Enqueue
Description: Enqueue the Stacktable.js script from http://johnpolacek.github.io/stacktable.js/
Version: 0.1
*/

function mpw_stacktable_scripts_method() {
    wp_enqueue_script( 'stacktable', plugins_url( '/js/stacktable.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'mpw-stacktable', plugins_url( '/js/mpw-stacktables.js' , __FILE__ ), array( 'jquery', 'stacktable', 'tablepress-datatables' ), '1.0', true );
    }


add_action( 'wp_enqueue_scripts', 'mpw_stacktable_scripts_method' );