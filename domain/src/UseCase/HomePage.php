<?php


namespace MLapalus\Portfolio\Domain\UseCase;


use MLapalus\Portfolio\Domain\Gateway\PortfolioGateway;
use MLapalus\Portfolio\Domain\Gateway\PortfolioTagGateway;
use MLapalus\Portfolio\Domain\Response\HomePageResponse;

class HomePage
{

    /**
     * @return HomePageResponse
     */
    public function execute(
        PortfolioGateway $portfolio,
        PortfolioTagGateway $tags
    ) : HomePageResponse
 {
     $dataPortfolio = $portfolio->getAll();
     $tagData = $tags->getAll();
     return new HomePageResponse($dataPortfolio, $tagData);
 }
}