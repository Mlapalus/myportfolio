<?php

namespace App\Infrastructure\Doctrine\Entity;

use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Uuid;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Formation
 * @package App\Infrastructure\Doctrine\Entity
 * @ORM\Entity()
 * @ORM\Table(name="FORMATIONS")
 */
class Formation
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
    private string $school;

    /**
     * @var string
     * @ORM\Column
     */
    private string $graduate;

    /**
     * @var string
     * @ORM\Column
     */
    private string $img;

    /**
     * @var string
     * @ORM\Column
     */
    private string $pdf;

    /**
     * @var string
     * @ORM\Column
     */
    private string $url;


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
     * @var string
     * @ORM\Column
     */
    private string $description;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $startDate;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $endDate;

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
