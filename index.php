<?php
/**
 * Created by JetBrains PhpStorm.
 * User: spolischook
 * Date: 31.10.12
 * Time: 14:01
 * To change this template use File | Settings | File Templates.
 */
require_once 'autoloader.php';
//require_once 'vendor/symfony/ClassLoader/UniversalClassLoader.php';
//use Symfony\Component\ClassLoader\UniversalClassLoader;
//$loader = new UniversalClassLoader();
//$loader->registerNamespace('MyShop', 'vendor/spolischook/Shop');
//$loader->register();

use Shop\Stall;


$foo = new Stall();
$foo->Sale();