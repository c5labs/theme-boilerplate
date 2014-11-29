<?php
namespace Concrete\Package\BoilerplateTheme;

use PageTheme;
use Package;
 
defined('C5_EXECUTE') or die('Access Denied.');
 
class Controller extends Package 
{
    protected $pkgHandle = 'boilerplate_theme';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '1.0.0';

    public function getPackageName() 
    {
        return t("Boilerplate Theme");
    }

    public function getPackageDescription() 
    {
        return t("Boilerplate Theme for 5.7.x.");
    }

    public function install()
    {
        $pkg = parent::install();

        // Install the theme
        $theme = PageTheme::add('boilerplate_theme', $pkg);
    }
}
