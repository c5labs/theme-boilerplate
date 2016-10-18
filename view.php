<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Single Page Template
 * 
 * This template is used to display non-system single pages.
 *
 * @author   Oliver Green <oliver@c5labs.com>
 * @license  See attached license file
 */

$this->inc('elements/header.php');

print $innerContent;

$this->inc('elements/footer.php');