<?php


namespace App\Presenter;


class CurriculumPresenter implements \App\Interfaces\PresenterInterface
{

    public function getData(): array
    {
        return [
            "surname" => "MLapalus",
            "experiences" => [
                [
                    "title" => "Coucou",
                    "img" => "https://via.placeholder.com/150",
                    "pdf" => "",
                    "url" => ""
                ],
                [
                    "title" => "ReCoucou",
                    "img" => "https://via.placeholder.com/150",
                    "pdf" => "",
                    "url" => ""
                ],
                [
                "title" => "ReReCoucou",
                "img" => "https://via.placeholder.com/150",
                "pdf" => "",
                "url" => ""
                ]
            ],
            "formations" => [
                [
                    "title" => "Coucou",
                    "img" => "https://via.placeholder.com/150",
                    "pdf" => "",
                    "url" => ""
                ],
                [
                    "title" => "ReCoucou",
                    "img" => "https://via.placeholder.com/150",
                    "pdf" => "",
                    "url" => ""
                ],
                [
                    "title" => "ReReCoucou",
                    "img" => "https://via.placeholder.com/150",
                    "pdf" => "",
                    "url" => ""
                ]
            ],
            ];
    }
}