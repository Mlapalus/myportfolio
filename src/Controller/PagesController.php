<?php


namespace App\Controller;


use App\Interfaces\PresenterInterface;
use App\Interfaces\ViewerInterface;
use App\Presenter\CurriculumPresenter;
use App\Presenter\IndexPresenter;
use App\Presenter\PortfolioPresenter;
use App\Viewer\Viewer;
use Symfony\Component\HttpFoundation\Response;

class PagesController
{
    private ViewerInterface $view;
    private PresenterInterface $indexPresenter;
    private PresenterInterface $cvPresenter;
    private PresenterInterface $portfolioPresenter;

    public function __construct(
        Viewer $view,
        IndexPresenter $indexPresenter,
        CurriculumPresenter $cvPresenter,
        PortfolioPresenter $portfolioPresenter
    ) {
        $this->view = $view;
        $this->indexPresenter = $indexPresenter;
        $this->cvPresenter = $cvPresenter;
        $this->portfolioPresenter = $portfolioPresenter;
    }

    public function index(): Response
    {
        return new Response($this->view->render('index', $this->indexPresenter->getData()));
    }

    public function curriculum(): Response
    {
        return new Response($this->view->render('curriculum', $this->cvPresenter->getData()));
    }

    public function portfolio() : Response
    {
        return new Response($this->view->render('portfolio', $this->portfolioPresenter->getData()));
    }
}