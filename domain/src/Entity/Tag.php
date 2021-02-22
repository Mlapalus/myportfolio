<?php
namespace MLapalus\Portfolio\Domain\Entity;

use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Uuid;

/**
 * Class PortfolioTags
 * @package App\Infrastructure\Doctrine\Entity
 */
class Tag
{
    /**
     * @var UuidInterface
     */

    private UuidInterface $id;
    /**
     * @var string
     */
    private string $tag;

    /**
     * Many Tags are in many Portfolio
     * @var Portfolio[]
     */
    private array $portfolios;

    /**
     * Tag constructor.
     * @param UuidInterface $id
     * @param string $tag
     * @param Portfolio[] $portfolios
     */
    public function __construct(
        UuidInterface $id,
        string $tag,
        array $portfolios)
    {
        $this->id = $id;
        $this->tag = $tag;
        $this->portfolios = $portfolios;
    }

    /**
     * @return Portfolio[]
     */
    public function getPortfolios(): array
    {
        return $this->portfolios;
    }

    /**
     * @param Portfolio[] $portfolios
     */
    public function setPortfolios(array $portfolios): void
    {
        $this->portfolios = $portfolios;
    }


    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @param UuidInterface $id
     */
    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

}