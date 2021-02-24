<?php

namespace MLapalus\Portfolio\Domain\UseCase;

use MLapalus\Portfolio\Domain\Gateway\PortfolioGateway;
use MLapalus\Portfolio\Domain\Gateway\TagGateway;
use MLapalus\Portfolio\Domain\Response\PortfolioResponse;

class PortfolioPage
{
    public function execute(
        PortfolioGateway $portfolio,
        TagGateway $tags
    ): PortfolioResponse {
        $dataPortfolio = $portfolio->getAll();
        $tagData = $tags->getAll();
        return new PortfolioResponse($dataPortfolio, $tagData);
    }
}
