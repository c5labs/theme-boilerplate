<?php
namespace Concrete\Package\ConcreteThemePackage;

use Concrete\Theme\Concrete\PageTheme;
use Concrete\Core\Package\Package;

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * Theme package.
 */
class Controller extends Package
{
    /**
     * Package handle.
     *
     * @var string
     */
    protected $pkgHandle = 'concrete_theme_package';

    /**
     * Minimum required version of concrete5 for this package.
     *
     * @var string
     */
    protected $appVersionRequired = '5.7.1';

    /**
     * Package version.
     *
     * @var string
     */
    protected $pkgVersion = '2.0.0';

    /**
     * Get the package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return t("Concrete Theme Package");
    }

    /**
     * Get the package description.
     *
     * @return string
     */
    public function getPackageDescription()
    {
        return t("A package that installs a boilerplate theme for 5.7.x.");
    }

    /**
     * Install routine.
     *
     * @return \Concrete\Core\Package\Package
     */
    public function install()
    {
        $pkg = parent::install();

        $theme = PageTheme::add('boilerplate_theme', $pkg);
    }

    /**
     * Uninstall routine.
     *
     * @return void
     */
    public function uninstall()
    {
        parent::uninstall();
    }
}
