<?php
declare(strict_types=1);


namespace AE\Domain\ValueObjects;


class Version
{
    /**
     * @var string
     */
    private $version;

    public function __construct(string $version)
    {
        $this->version = $version;
    }
}