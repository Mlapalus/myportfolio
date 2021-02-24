<?php

namespace MLapalus\Portfolio\Domain\Entity;

use Ramsey\Uuid\UuidInterface;
use DateTimeInterface;

/**
 * Class Portfolio
 * @package App\Infrastructure\Doctrine\Entity
 *
 */
class Portfolio
{
    /**
     * @var UuidInterface

     */
    private UuidInterface $id;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $url;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $img;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdDate;

    /**
     * Many Portfolio have many tags, and many tags are in many portfolio
     * @var Tag[]
     */
    private array $tags;


    /**
     * Portfolio constructor.
     * @param UuidInterface $id
     * @param string $title
     * @param string $url
     * @param string $description
     * @param string $img
     * @param DateTimeInterface $createdDate
     * @param Tag[] $tags
     */
    public function __construct(
        UuidInterface $id,
        string $title,
        string $url,
        string $description,
        string $img,
        DateTimeInterface $createdDate,
        array $tags
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->url = $url;
        $this->description = $description;
        $this->img = $img;
        $this->createdDate = $createdDate;
        $this->tags = $tags;
    }
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
     * @return Tag[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
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
