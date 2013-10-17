<?php
/**
 * Created by JetBrains PhpStorm.
 * User: spolischook
 * Date: 31.10.12
 * Time: 13:54
 * To change this template use File | Settings | File Templates.
 */
namespace Shop;

class Stall extends Shop
{
    public $square;

    public function __construct()
    {
        parent::__construct();
    }
    public function sale()
    {
        echo 'My Stall sale!';
    }

    public function manyBack()
    {
        echo 'My Stall manyBack!';
    }

    public function moveToService()
    {
        echo 'My Stall moveToService!';
    }
}
