<?php


namespace MLapalus\Portfolio\Domain\Presenter;

use MLapalus\Portfolio\Domain\Response\CurriculumResponse;

interface CurriculumPresenterInterface
{
    public function present(CurriculumResponse $response): array;

}