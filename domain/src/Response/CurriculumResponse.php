<?php

namespace MLapalus\Portfolio\Domain\Response;

class CurriculumResponse
{
    /**
     * @var array
     */
    private array $dataPortfolio;
    /**
     * @var array
     */
    private array $tagData;
    /**
     * @var array
     */
    private array $experience;
    /**
     * @var array
     */
    private array $formation;

    /**
     * CurriculumResponse constructor.
     * @param array $dataPortfolio
     * @param array $tagData
     * @param array $experience
     * @param array $formation
     */
    public function __construct(
        array $dataPortfolio,
        array $tagData,
        array $experience,
        array $formation
    ) {
        $this->dataPortfolio = $dataPortfolio;
        $this->tagData = $tagData;
        $this->experience = $experience;
        $this->formation = $formation;
    }

    /**
     * @return array
     */
    public function getCurriculum(): array
    {
        return [
        "surname" => "MLapalus",
        "experiences" => $this->experience,
        "formations" => $this->formation,
        "tagData" => $this->tagData,
        "dataPortfolio" => $this->dataPortfolio
        ];
    }
}
