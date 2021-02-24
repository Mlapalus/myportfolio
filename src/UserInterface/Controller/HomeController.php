<?php

namespace App\UserInterface\Controller;

use App\Infrastructure\Adapter\Repository\PortfolioRepository;
use App\Infrastructure\Adapter\Repository\TagsRepository;
use App\UserInterface\Viewer\ViewerInterface;
use App\UserInterface\Presenter\HomePresenter;
use App\UserInterface\Viewer\Viewer;
use MLapalus\Portfolio\Domain\UseCase\HomePage;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @var Viewer|ViewerInterface
     */
    private ViewerInterface $view;

    /**
     * HomeController constructor.
     * @param Viewer $view
     */
    public function __construct(
        Viewer $view
    ) {
        $this->view = $view;
    }

    /**
     * @param HomePage $homePage
     * @param HomePresenter $homePresenter
     * @return Response
     */
    public function index(
        HomePage $homePage,
        HomePresenter $homePresenter,
        PortfolioRepository $portfolio,
        TagsRepository $tags
    ): Response {
        $data = $homePage->execute($portfolio, $tags);
        return new Response($this->view->render('home', $homePresenter->present($data)));
    }
}
