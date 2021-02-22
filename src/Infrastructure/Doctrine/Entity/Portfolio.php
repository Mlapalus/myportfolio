<?php


namespace App\Infrastructure\Doctrine\Entity;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Portfolio
 * @package App\Infrastructure\Doctrine\Entity
 * @ORM\Entity()
 * @ORM\Table(name="PORTFOLIO")
 *
 */
class Portfolio
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
    private string $title;

    /**
     * @var string
     * @ORM\Column
     */
    private string $url;

    /**
     * @var string
     * @ORM\Column
     */
    private string $description;

    /**
     * @var string
     * @ORM\Column
     */
    private string $img;

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $createdDate;

    /**
     * Many Portfolio have many tags, and many tags are in many portfolio
     * @var Collection
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="portfolios" )
     * @ORM\JoinTable(name="portfolios_tags")
     */
    private Collection $tags;

    /**
     * @return Collection
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = new ArrayCollection($tags);
    }

    public function __construct()
    {
        $this->tags = new ArrayCollection();
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedDate(): DateTimeInterface
    {
        return $this->createdDate;
    }

    /**
     * @param DateTimeInterface $createdDate
     */
    public function setCreatedDate(DateTimeInterface $createdDate): void
    {
        $this->createdDate = $createdDate;
    }

}