<?php
/**
 * @author Joppe Aarts <joppe@zicht.nl>
 * @copyright Zicht Online <http://zicht.nl>
 */
namespace Zicht\Tool\Plugin\Bower;

use Zicht\Tool\Plugin as BasePlugin;
use Zicht\Tool\Container\Container;

/**
 * Class Plugin
 * @package Zicht\Tool\Plugin\Bower
 */
class Plugin extends BasePlugin
{
    /**
     * @param Container $container
     */
    public function setContainer(Container $container)
    {
        $packageFile = array_pop(explode('/', $container->resolve(array('vcs', 'url')))) . '.tar.gz';
        $container->set('package_file', $packageFile);
    }
}