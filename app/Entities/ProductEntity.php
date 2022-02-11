<?php


namespace App\Entities;


use App\Contracts\IOffer;
use App\Hydrators\VendorHydrator;

/**
 * Class ProductEntity
 * @package App\Entities
 */
class ProductEntity implements IOffer
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $startTime;

    /**
     * @var string
     */
    private $endTime;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var VendorEntity
     */
    private $vendor;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     */
    public function setStartTime(string $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     */
    public function setEndTime(string $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return VendorEntity
     */
    public function getVendor(): VendorEntity
    {
        return $this->vendor;
    }

    /**
     * @param VendorEntity $vendor
     */
    public function setVendor($vendor): void
    {
        $this->vendor = VendorHydrator::hydrate($vendor);
    }



}
