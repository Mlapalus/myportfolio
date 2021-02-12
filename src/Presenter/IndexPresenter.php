<?php


namespace App\Presenter;


use App\Interfaces\PresenterInterface;

class IndexPresenter implements PresenterInterface
{

    public function getData(): array
    {
        return [
            "firstname" => "Michel",
            "lastname" => "Lapalus",
            "surname" => "MLapalus",
            "userDescription" => "Jeune homme de 47ans, j'ai un diplôme d'ingénieur en électronique et en informatique,
                                  et un DEA en microélectronique. J'ai travaillé 5 ans dans les telecoms, 
                                  puis j'ai travaillé pendant 15 ans dans la gestion d'établissements de nuit à Paris. 
                                   Depuis 1 an, je me consacre à un retour dans le milieu de l'informatique. "
        ];
    }


}