<?php


namespace MLapalus\Portfolio\Domain\Presenter;


use MLapalus\Portfolio\Domain\Response\HomePageResponse;

interface HomePresenterInterface
{
    public function present(HomePageResponse $response): array;
}