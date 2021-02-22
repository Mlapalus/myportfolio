<?php


namespace App\UserInterface\Presenter;


use MLapalus\Portfolio\Domain\Presenter\PortfolioPresenterInterface;
use MLapalus\Portfolio\Domain\Response\PortfolioResponse;

class PortfolioPresenter implements PortfolioPresenterInterface
{

    public function present(PortfolioResponse $response): array
    {
        return $response->getPortfolio();
    }
}