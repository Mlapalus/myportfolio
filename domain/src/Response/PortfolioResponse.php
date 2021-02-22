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
            "languageTags" => $this->tagData,
            "dataPortfolio" => $this->dataPortfolio,
            "tagData" => $this->tagData

        ];
    }
}