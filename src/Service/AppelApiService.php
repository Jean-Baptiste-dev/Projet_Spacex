<?php

namespace App\Service;

use Symfony\Bundle\MakerBundle\Str;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AppelApiService{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        
    }
    
    public function getSpacexData(): array
    {

        return $this->getDataBy('launches');
    }

    public function getRocketsData(): array{

        return $this->getDataBy('rockets');
    }

    public function getLandpadsData(): array{
        
        return $this->getDataBy('landpads');
    }

    public function getlaunchpadsData(): array{
        
        return $this->getDataBy('launchpads');
    }

    
    public function getlaunchesLatestData(): array{
        
        return $this->getLaunchesDataLatest('launches', 'latest');
    }

    

    private function getDataBy(string $var): array{
        $responce = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/' .$var
        );
        return $responce->toArray();
    }

    private function getLaunchesDataLatest(string $var, string $var2): array{
        $responce = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/' .$var.'/' .$var2
        );
        return $responce->toArray();
    }

    public function getChoice(string $choice){
        
        if(isset($_POST['choice'])){

            $select_landpad =  $_POST['choice'];
            
            switch($select_landpad)
            {
                case $select_landpad:


            }
             

     
    }
}

    public function getChoices(string $chois1, string $chois2): array{
    

        if(isset($_POST['chois1']) && isset($_POST['chois2'])){

            $select_landpad =  $_POST['chois1'];

            $select_launchpad =  $_POST['chois2'];
            
            return $select_landpad;
             $select_launchpad;
        }

    }
}

  