<?php


namespace MLapalus\Portfolio\Domain\Response;


class PortfolioResponse
{
    private array $dataPortfolio;
    private array $tagData;

    /**
     * PortfolioResponse constructor.
     * @param array $dataPortfolio
     * @param array $tagData
     */
    public function __construct(array $dataPortfolio, array $tagData)
    {
        $this->dataPortfolio = $dataPortfolio;
        $this->tagData = $tagData;
    }

    public function getPortfolio(): array
    {
        return [
            "firstname" => "Michel",
            "lastname" => "Lapalus",
            "surname" => "MLapalus",
            "languageTags" => [
                ["name" => "PHP"],
                ["name" => "HTML"],
                ["name" => "CSS"]
            ],
            "dataPortfolio" => $this->dataPortfolio,
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
            "tagData" => $this->tagData
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
        ];
    }
}