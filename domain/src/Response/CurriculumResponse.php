<?php


namespace MLapalus\Portfolio\Domain\Response;


class CurriculumResponse
{
    private array $dataPortfolio;
    private array $tagData;
    private array $experience;
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
        array $formation)
    {
        $this->dataPortfolio = $dataPortfolio;
        $this->tagData = $tagData;
        $this->experience = $experience;
        $this->formation = $formation;
    }


    public function getCurriculum(): array
    {
        return [
        "surname" => "MLapalus",
        "experiences" => $this->experience,
           /* [
            [
                "title" => "Coucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
            ],
            [
                "title" => "ReCoucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
            ],
            [
                "title" => "ReReCoucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
            ]
        ],
           */
        "formations" => $this->formation,
           /* [
            [
                "title" => "Coucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
            ],
            [
                "title" => "ReCoucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
            ],
            [
                "title" => "ReReCoucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
            ]
        ],
           */
        "tagData" => $this->tagData,
            /*[
            [
                "id" => 0,
                "tag" => "PHP"
            ],
            [
                "id" => 1,
                "tag" => "HTML"
            ],
            [
                "id" => 2,
                "tag" => "CSS"
            ]
        ],
            */
        "dataPortfolio" => $this->dataPortfolio
            /*[
            [
                "id" => 0,
                "img" => "https://via.placeholder.com/150",
                "url" => "",
                'title' => "titre1"
            ],
            [
                "id" => 1,
                "img" => "https://via.placeholder.com/150",
                "url" => "",
                'title' => "titre2"
            ],
            [
                "id" => 2,
                "img" => "https://via.placeholder.com/150",
                "url" => "",
                "title" => "titre3"
            ]
        ],
            */
    ];
    }
}