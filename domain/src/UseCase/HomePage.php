<?php

namespace MLapalus\Portfolio\Domain\UseCase;

use MLapalus\Portfolio\Domain\Gateway\PortfolioGateway;
use MLapalus\Portfolio\Domain\Gateway\TagGateway;
use MLapalus\Portfolio\Domain\Response\HomePageResponse;

class HomePage
{
    /**
     * @return HomePageResponse
     */
    public function execute(
        PortfolioGateway $portfolio,
        TagGateway $tags
    ): HomePageResponse {
        $dataPortfolio = $portfolio->getAll();
        $tagData = $tags->getAll();
        return new HomePageResponse($dataPortfolio, $tagData);
    }
}
