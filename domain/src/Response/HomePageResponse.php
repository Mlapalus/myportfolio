<?php

namespace MLapalus\Portfolio\Domain\Response;

class HomePageResponse
{
    /**
     * @var array
     */
    private array $tagData;
    /**
     * @var array
     */
    private array $dataPortfolio;

    /**
     * HomePageResponse constructor.
     * @param array $tagData
     * @param array $dataPortfolio
     */
    public function __construct(array $dataPortfolio, array $tagData)
    {
        $this->tagData = $tagData;
        $this->dataPortfolio = $dataPortfolio;
    }

    /**
     * @return array
     */
    public function getAboutMe() : array
    {
        return [
            "firstname" => "Michel",
            "lastname" => "Lapalus",
            "surname" => "MLapalus",
            "userDescription" => "Jeune homme de 47ans, j'ai un diplôme d'ingénieur en électronique et en informatique,
                                  et un DEA en microélectronique. J'ai travaillé 5 ans dans les telecoms, 
                                  puis j'ai travaillé pendant 15 ans dans la gestion d'établissements de nuit à Paris. 
                                   Depuis 1 an, je me consacre à un retour dans le milieu de l'informatique. ",
            "tagData" => $this->tagData,
            "dataPortfolio" => $this->dataPortfolio
        ];
    }

}