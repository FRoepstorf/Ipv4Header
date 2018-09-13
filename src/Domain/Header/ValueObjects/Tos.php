<?php
declare(strict_types=1);


namespace AE\Domain\ValueObjects;


class Tos
{
    /**
     * @var string
     */
    private $tos;

    public function __construct(string $tos)
    {
        $this->tos = $tos;
    }
}