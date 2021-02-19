<?php

namespace App\UserInterface\Controller;

use App\Infrastructure\Adapter\Repository\ExperienceRepository;
use App\Infrastructure\Adapter\Repository\FormationRepository;
use App\Infrastructure\Adapter\Repository\PortfolioRepository;
use App\Infrastructure\Adapter\Repository\TagsRepository;
use App\UserInterface\Viewer\ViewerInterface;
use App\UserInterface\Presenter\CurriculumPresenter;
use App\UserInterface\Viewer\Viewer;
use MLapalus\Portfolio\Domain\UseCase\CurriculumPage;
use Symfony\Component\HttpFoundation\Response;

class CurriculumController
{
    private ViewerInterface $view;

    public function __construct(
        Viewer $view
    ) {
        $this->view = $view;
    }

    public function curriculum(
        ExperienceRepository $experience,
        FormationRepository $formation,
        PortfolioRepository $portfolio,
        TagsRepository $tags,
        CurriculumPage $curriculumPage,
        CurriculumPresenter $presenter): Response
    {
        $data = $curriculumPage->execute($experience, $formation, $tags, $portfolio);
        return new Response($this->view->render('curriculum', $presenter->present($data)));
    }

}