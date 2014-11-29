<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * 'Default' fail over page for the theme
 * 
 * @author Oliver Green <dubious@codeblog.co.uk>
 * @license http://www.gnu.org/licenses/gpl.html GPL
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