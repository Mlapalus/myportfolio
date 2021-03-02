[![SonarCloud](https://sonarcloud.io/images/project_badges/sonarcloud-black.svg)](https://sonarcloud.io/dashboard?id=Mlapalus_myportfolio)

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/2b6abd59a5d84389af160c01e04dc944)](https://www.codacy.com/gh/Mlapalus/myportfolio/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Mlapalus/myportfolio&amp;utm_campaign=Badge_Grade)

<p align="center">
	<a href="http://mlapalus-dev.fr"><img src="https://img.shields.io/github/checks-status/Mlapalus/myportfolio/main" alt="Build Status"></a>
	<a href="https://phpstan.org/"><img src="https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat" alt="PHPStan Enabled"></a>
</p>


# Mon site perso: Mon CV & Mes Réalisations
## Stack :
        PHP 7.4.15
        Symfony 4.22.0
        PHPUnit 8.5.14
        PHPStan 0.12.78
        PHP_CodeSniffer 3.5.8
        Docker 20.10.2
        Git / GitHub / GitHub Actions
        
 Deployments : o2switch, [MLapalus-Dev](http://mlapalus-dev.fr)
         
        

## Install the project : 

in the root folder
```shell script
docker-compose up -d
docker-compose exec www sh
```

In the container :

create the file ".env.dev.local"  to config the Database with the docker container:
```dotenv
APP_SECRET='$ecretf0rt3st'
DATABASE_URL="mysql://root:@db_myportfolio:3306/db_dev?serverVersion=5.7"
```
Run :
```shell script
composer install
make prepare-dev
```

## Test the application : 
PHP Code Sniffer, PHP Stan and PHPunit
```shell script
make build
```

## Architecture of the project :

- docker folder : 

        Contains the docker configuration for PHP

- src folder :

            Infrastructure 
                - Doctrine  
                - Adapter for comunication with the Doamin 

            UserInterface
                - Controller
                - Presenter
                - Viewer for implement Twig or someone else
            

- domain folder :
            
            src
                Entity
                Gateway
                Presenter
                Response
                UseCase



