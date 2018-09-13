<?php
declare(strict_types=1);


namespace AE\Domain\Header;


use AE\Domain\ValueObjects\Flags;
use AE\Domain\ValueObjects\FragmentOffset;
use AE\Domain\ValueObjects\OriginAddress;
use AE\Domain\ValueObjects\SourceAddress;
use AE\Domain\ValueObjects\Tos;
use AE\Domain\ValueObjects\Version;

class Ipv4Header
{
    /**
     * @var Version
     */
    private $version;

    /**
     * @var Tos
     */
    private $tos;

    /**
     * @var Flags
     */
    private $flags;

    /**
     * @var FragmentOffset
     */
    private $fragmentOffset;

    /**
     * @var SourceAddress
     */
    private $sourceAddress;
    /**
     * @var OriginAddress
     */
    private $originAddress;

    public function __construct(
        Version $version,
        Tos $tos,
        Flags $flags,
        FragmentOffset $fragmentOffset,
        SourceAddress $sourceAddress,
        OriginAddress $originAddress
    )
    {
        $this->version = $version;
        $this->tos = $tos;
        $this->flags = $flags;
        $this->fragmentOffset = $fragmentOffset;
        $this->sourceAddress = $sourceAddress;
        $this->originAddress = $originAddress;
    }

    public function version(): Version
    {
        return $this->version;
    }

    public function tos(): Tos
    {
        return $this->tos;
    }

    public function flags(): Flags
    {
        return $this->flags;
    }

    public function fragmentOffset(): FragmentOffset
    {
        return $this->fragmentOffset;
    }

    public function sourceAddress(): SourceAddress
    {
        return $this->sourceAddress;
    }

    public function originAddress(): OriginAddress
    {
        return $this->originAddress;
    }

}