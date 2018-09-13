<?php
declare(strict_types=1);


namespace AE\Domain\ValueObjects;


class BaseIpv4Address
{
    /**
     * @var string
     */
    private $address;

    public function __construct(string $address)
    {
        $this->address = $address;
    }
}