<?php
namespace Concrete\Package\ConcreteThemePackage;

use PageTheme;
use Package;
 
defined('C5_EXECUTE') or die('Access Denied.');
 
class Controller extends Package 
{
    protected $pkgHandle = 'concrete_theme_package';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '2.0.0';

    public function getPackageName() 
    {
        return t("Concrete Theme Package");
    }

    public function getPackageDescription() 
    {
        return t("A package that installs a boilerplate theme for 5.7.x.");
    }

    public function install()
    {
        $pkg = parent::install();

        // Install the theme
        $theme = PageTheme::add('boilerplate_theme', $pkg);
    }
}
