<?php

namespace App\UserInterface\Controller;

use App\Infrastructure\Adapter\Repository\PortfolioRepository;
use App\Infrastructure\Adapter\Repository\TagsRepository;
use App\UserInterface\Viewer\ViewerInterface;
use App\UserInterface\Presenter\PortfolioPresenter;
use App\UserInterface\Viewer\Viewer;
use MLapalus\Portfolio\Domain\UseCase\PortfolioPage;
use Symfony\Component\HttpFoundation\Response;

class PortfolioController
{
    private ViewerInterface $view;

    public function __construct(
        Viewer $view
    ) {
        $this->view = $view;
    }

    public function portfolio(
        PortfolioRepository $portfolio,
        TagsRepository $tags,
        PortfolioPage $portfolioPage,
        PortfolioPresenter $presenter
    ): Response
    {
        $data = $portfolioPage->execute($portfolio, $tags);
        return new Response($this->view->render('portfolio', $presenter->present($data)));
    }

}