<?php


namespace MLapalus\Portfolio\Domain\UseCase;


use MLapalus\Portfolio\Domain\Gateway\PortfolioGateway;
use MLapalus\Portfolio\Domain\Gateway\PortfolioTagGateway;
use MLapalus\Portfolio\Domain\Response\PortfolioResponse;

class PortfolioPage
{
    public function execute(
        PortfolioGateway $portfolio,
        PortfolioTagGateway $tags
    ) : PortfolioResponse
    {
        $dataPortfolio = $portfolio->getAll();
        $tagData = $tags->getAll();
        return new PortfolioResponse($dataPortfolio, $tagData);

    }
}