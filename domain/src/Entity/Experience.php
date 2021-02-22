<?php
namespace MLapalus\Portfolio\Domain\Entity;

use Ramsey\Uuid\UuidInterface;

/**
 * Class Experience
 * @package MLapalus\Domain\Entity
 */
class Experience
{
    /**
     * @var UuidInterface
     */
    private UuidInterface  $id;
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $company;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var string
     */
    private string $url;
    /**
     * @var string
     */
    private string $img;
    /**
     * @var string
     */
    private string $pdf;
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $startDate;
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $endDate;

    /**
     * Experience constructor.
     * @param UuidInterface $id
     * @param string $title
     * @param string $company
     * @param string $description
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     */
    public function __construct(
        UuidInterface $id,
        string $title,
        string $company,
        string $description,
        string $url,
        string $pdf,
        string $img,
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->company = $company;
        $this->url = $url;
        $this->pdf = $pdf;
        $this->img = $img;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
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
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company): void
    {
        $this->company = $company;
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
     * @return \DateTimeInterface
     */
    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     */
    public function setStartDate(\DateTimeInterface $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     */
    public function setEndDate(\DateTimeInterface $endDate): void
    {
        $this->endDate = $endDate;
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
     * @return string
     */
    public function getPdf(): string
    {
        return $this->pdf;
    }

    /**
     * @param string $pdf
     */
    public function setPdf(string $pdf): void
    {
        $this->pdf = $pdf;
    }


}