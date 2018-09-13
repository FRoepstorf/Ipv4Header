<?php
declare(strict_types=1);


namespace AE\Domain\ValueObjects;


class FragmentOffset
{
    /**
     * @var string
     */
    private $offset;

    public function __construct(string $offset)
    {
        $this->offset = $offset;
    }
}