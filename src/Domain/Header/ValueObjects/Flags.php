<?php
declare(strict_types=1);


namespace AE\Domain\ValueObjects;


class Flags
{
    /**
     * @var string
     */
    private $flags;

    public function __construct(string $flags)
    {
        $this->flags = $flags;
    }
}