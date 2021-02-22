<?php

namespace App\Infrastructure\Doctrine\Entity;

use Ramsey\Uuid\UuidInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Tag
 * @package App\Infrastructure\Doctrine\Entity
 * @ORM\Entity()
 * @ORM\Table(name="PORTFOLIO_TAGS")
 */
class Tag
{
    /**
     * @var UuidInterface
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */

    private UuidInterface $id;
    /**
     * @var string
     * @ORM\Column
     */
    private string $tag;

    /**
     * Many Tags are in many Portfolio
     * @ORM\ManyToMany(targetEntity="Portfolio", mappedBy="tags")
     * @var Collection
     */
    private Collection $portfolios;

    /**
     * @return Collection
     */
    public function getPortfolios(): Collection
    {
        return $this->portfolios;
    }

    /**
     * @param array $portfolios
     */
    public function setPortfolios(array $portfolios): void
    {
        $this->portfolios = new ArrayCollection($portfolios);
    }

    /**
     * PortfolioTags constructor.
     */
    public function __construct()
    {
        $this->portfolios = new ArrayCollection();
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