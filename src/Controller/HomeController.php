<?php

namespace App\Controller;

use App\Service\AppelApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class HomeController extends AbstractController
{

   
    /**
     * @Route("/", name="app_home")
     */
    public function home(AppelApiService $appelApiService): Response
    {
      //dd($appelApiService->getSpacexData());

     // dd($appelApiService->getRocketsData());

     //dd($appelApiService->getlaunchesLatestData());


        return $this->render('home/index.html.twig', [
            'data' => $appelApiService->getSpacexData(),
            
            'datarockets' => $appelApiService->getRocketsData(),

            //'datalandpad' => $appelApiService->getLandpadsData(),

            //'datalaunchpad' => $appelApiService->getLaunchpadsData(),

            'datalauncheslatest' => $appelApiService->getlaunchesLatestData(),
            


           
        ]);
    }
    /**
     * @Route("/lancements", name="app_lancement")
     */
    public function launches(AppelApiService $appelApiService): Response
    {
      //dd($appelApiService->getSpacexData());

     // dd($appelApiService->getLaunchpadsData());

     // dd($appelApiService->getLandpadsData());


        return $this->render('home/launches.html.twig', [
            'data' => $appelApiService->getSpacexData(),
            
           // 'datarockets' => $appelApiService->getRocketsData(),

            'datalandpad' => $appelApiService->getLandpadsData(),

            'datalaunchpad' => $appelApiService->getLaunchpadsData(),

            //'datalauncheslatest' => $appelApiService->getlaunchesLatestData(),
            


           
        ]);
    }

     

    /** 
    public function launchesbySearch(AppelApiService $appelApiService): Response
    {
     
        if(isset($_POST['select_landpad'])){

            $select_landpad =  $_POST['select_landpad'];
            
            switch($select_landpad)
            {
                case $select_landpad:


            }
             

        }elseif(isset($_POST['select_launchpad'])){

            $select_launchpad =  $_POST['select_landpad'];

            switch($select_launchpad)
            {
                case $select_launchpad:


            }

        }elseif(isset($_POST['select_landpad']) && isset($_POST['select_launchpad'])){

            $select_launchpad =  $_POST['select_landpad'];
            $select_landpad =  $_POST['select_landpad'];

        }


        return $this->render('home/launches.html.twig', [

            'reponsepost' => $this->rec,

            'data' => $appelApiService->getSpacexData(),
            
           // 'datarockets' => $appelApiService->getRocketsData(),

           'datalandpad' => $appelApiService->getLandpadsData(),

            'datalaunchpad' => $appelApiService->getLaunchpadsData(),

            

            //'datalauncheslatest' => $appelApiService->getlaunchesLatestData(),
            


           
        ]);
    }
    */
    

    /**
     * @Route("/landpads", name="app_landpad")
     */
    
    public function landpad(AppelApiService $appelApiService): Response
    {

       // dd($appelApiService->getLandpadsData());

        return $this->render('home/landpads.html.twig', [
            'datalandpad' => $appelApiService->getLandpadsData(),

        ]);
    }
    

    
    /**
     * @Route("/launchpads", name="app_launchpad")
     */
    
    public function launchpads(AppelApiService $appelApiService): Response
    {

       //dd($appelApiService->getLaunchpadsData());

        return $this->render('home/launchpads.html.twig', [
            'datalaunchpad' => $appelApiService->getLaunchpadsData(),

        ]);
    }
    

    
}
