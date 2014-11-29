<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Header element for all pages
 * @author Oliver Green <green2go@gmail.com>
 * @license http://www.gnu.org/licenses/gpl.html GPL
 */

?>
<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta charset="UTF-8">
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
    <link rel="stylesheet" media="all" href="<?php  echo $this->getThemePath(); ?>/css/styles.css" />
</head>
<body class="<?php echo $c->getPageWrapperClass()?>">