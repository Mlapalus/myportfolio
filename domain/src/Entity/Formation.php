<?php
namespace MLapalus\Portfolio\Domain\Entity;

use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Formation
 * @package App\Infrastructure\Doctrine\Entity
 */
class Formation
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
    private string $school;

    /**
     * @var string
     */
    private string $graduate;

    /**
     * @var string
     */
    private string $img;

    /**
     * @var string
     */
    private string $pdf;

    /**
     * @var string
     */
    private string $url;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $startDate;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $endDate;

    /**
     * Formation constructor.
     * @param UuidInterface $id
     * @param string $title
     * @param string $school
     * @param string $graduate
     * @param string $img
     * @param string $pdf
     * @param string $url
     * @param string $description
     * @param DateTimeInterface $startDate
     * @param DateTimeInterface $endDate
     */
    public function __construct(
        UuidInterface $id,
        string $title,
        string $school,
        string $graduate,
        string $img,
        string $pdf,
        string $url,
        string $description,
        DateTimeInterface $startDate,
        DateTimeInterface $endDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->school = $school;
        $this->graduate = $graduate;
        $this->img = $img;
        $this->pdf = $pdf;
        $this->url = $url;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
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
    public function getGraduate(): string
    {
        return $this->graduate;
    }

    /**
     * @param string $graduate
     */
    public function setGraduate(string $graduate): void
    {
        $this->graduate = $graduate;
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
    public function getSchool(): string
    {
        return $this->school;
    }

    /**
     * @param string $school
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
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
    public function getStartDate(): DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface $startDate
     */
    public function setStartDate(DateTimeInterface $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEndDate(): DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeInterface $endDate
     */
    public function setEndDate(DateTimeInterface $endDate): void
    {
        $this->endDate = $endDate;
    }


}