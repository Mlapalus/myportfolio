<?php


namespace MLapalus\Portfolio\Domain\Presenter;


use MLapalus\Portfolio\Domain\Response\PortfolioResponse;

interface PortfolioPresenterInterface
{
    public function present(PortfolioResponse $response): array;

}