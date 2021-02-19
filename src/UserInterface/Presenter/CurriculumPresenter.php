<?php


namespace App\UserInterface\Presenter;


use MLapalus\Portfolio\Domain\Presenter\CurriculumPresenterInterface;
use MLapalus\Portfolio\Domain\Response\CurriculumResponse;

class CurriculumPresenter implements CurriculumPresenterInterface
{

    public function present(CurriculumResponse $response): array
    {
        return $response->getCurriculum();
    }
}