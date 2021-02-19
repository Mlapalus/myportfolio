<?php


namespace MLapalus\Portfolio\Domain\UseCase;

use MLapalus\Portfolio\Domain\Gateway\ExperienceGateway;
use MLapalus\Portfolio\Domain\Gateway\FormationGateway;
use MLapalus\Portfolio\Domain\Gateway\PortfolioGateway;
use MLapalus\Portfolio\Domain\Gateway\PortfolioTagGateway;
use MLapalus\Portfolio\Domain\Response\CurriculumResponse;

class CurriculumPage
{
    public function execute(
        ExperienceGateway $experience,
        FormationGateway $formation,
        PortfolioTagGateway $tags,
        PortfolioGateway $portfolio
    ): CurriculumResponse
    {
        $dataPortfolio = $portfolio->getAll();
        $tagData = $tags->getAll();
        $dataFormation = $formation->getAll();
        $dataExperience = $experience->getAll();
        return new CurriculumResponse($dataPortfolio,$tagData, $dataExperience,$dataFormation);
    }
}