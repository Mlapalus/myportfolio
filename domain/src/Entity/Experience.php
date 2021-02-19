<?php
namespace MLapalus\Portfolio\Domain\Entity;


use Ramsey\Uuid\UuidInterface;

/**
 * Class Experience
 * @package MLapalus\Domain\Entity
 */
class Experience
{
    private UuidInterface  $id;
    private string $title;
    private string $company;
    private string $description;
    private \DateTimeInterface $startDate;
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
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->company = $company;
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


}