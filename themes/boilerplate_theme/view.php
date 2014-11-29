<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Wrapper page for single pages
 * @author Oliver Green <dubious@codeblog.co.uk>
 * @license http://www.gnu.org/licenses/gpl.html GPL
 */

$this->inc('elements/header.php');

print $innerContent;

$this->inc('elements/footer.php');