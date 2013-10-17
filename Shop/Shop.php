<?php
/**
 * Created by JetBrains PhpStorm.
 * User: spolischook
 * Date: 31.10.12
 * Time: 0:23
 * To change this template use File | Settings | File Templates.
 */
namespace Shop;

abstract class Shop implements ShopingInterface
{
    private $workingTime;
    private $manager;
    private $contract;
    private $region;

    public function __construct ()
    {

    }

    /**
     * @param $array array
     */
    public function setWorkingTime($array)
    {
        $this->workingTime = $array;
    }

    public function setManager($objManager)
    {
        $this->manager = $objManager;
    }

    public function setContract($objContract)
    {
        $this->contract = $objContract;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getWorkingTime()
    {
        return $this->workingTime;
    }

    public function getManager()
    {
        return $this->manager;
    }

    public function getContract()
    {
        return $this->contract;
    }

    public function getRegion()
    {
        return $this->region;
    }

}