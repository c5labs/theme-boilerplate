<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Default Page Template.
 * 
 * This template is used by default for all pages that 
 * are not single pages, dashboard pages or other system pages.
 *
 * @author   Oliver Green <oliver@c5labs.com>
 * @license  See attached license file
 */

$this->inc('elements/header.php');

/*
 * This is the main area for the theme you 
 * will see when editing a page .
 */
$a = new Area('Main');

/* 
 * See http://goo.gl/oKEJzD for information 
 * on how to enable grid suppor in your theme
 * 
 * $a->enableGridContainer();
 */

$a->display($c);

$this->inc('elements/footer.php');