<?php


namespace App\Presenter;


class PortfolioPresenter implements \App\Interfaces\PresenterInterface
{

    public function getData(): array
    {
        return [
            "firstname" => "Michel",
            "lastname" => "Lapalus",
            "surname" => "MLapalus",
            "languageTags" => [
                ["name" => "PHP"],
                ["name" => "HTML"],
                ["name" => "CSS"]
             ],
            "dataPortfolio" => [
                [
                    "id" => 0,
                    "img" => "https://via.placeholder.com/150",
                    "url" => ""
                ],
                [
                    "id" => 1,
                    "img" => "https://via.placeholder.com/150",
                    "url" => ""
                ],
                [
                    "id" => 2,
                    "img" => "https://via.placeholder.com/150",
                    "url" => ""
                ]
            ],
            "tagData" => [
                [
                    "id" => 0,
                    "tag" => "PHP"
                ],
                [
                    "id" => 1,
                    "tag" => "HTML"
                ],
                [
                    "id" => 2,
                    "tag" => "CSS"
                ]
            ],
            ];
    }
}