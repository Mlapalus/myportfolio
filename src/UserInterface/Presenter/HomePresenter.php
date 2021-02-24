<?php

namespace App\UserInterface\Presenter;

use MLapalus\Portfolio\Domain\Presenter\HomePresenterInterface;
use MLapalus\Portfolio\Domain\Response\HomePageResponse;

class HomePresenter implements HomePresenterInterface
{
    public function present(HomePageResponse $response): array
    {
        return $response->getAboutMe();
    }
}
