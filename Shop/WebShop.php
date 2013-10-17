<?php
/**
 * Created by JetBrains PhpStorm.
 * User: spolischook
 * Date: 31.10.12
 * Time: 13:26
 * To change this template use File | Settings | File Templates.
 */
namespace Shop;

class WebShop extends Shop
{
    private $website = 'www.net';

    public function __construct()
    {
        parent::__construct();
    }
    public function sale()
    {
        echo 'My WebShop Sale';
    }
    public function manyBack()
    {
        echo 'My WebShop ManyBack';
    }
    public function moveToService()
    {
        echo 'My WebShop MoveToService';
    }
    public function getWebSite()
    {
        echo $this->website;
    }



}
