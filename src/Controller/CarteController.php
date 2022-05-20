<?php

namespace App\Controller;

use App\Service\AppelApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{

   

    /**
     * @Route("/carte_launchpad", name="app_carte_launchpad")
     */
    public function carte_launchpad(AppelApiService $appelApiService): Response
    {


         //dd($appelApiService->getLaunchpadsData());
        return $this->render('carte/carte_launchpad.html.twig', [
            'datalaunchpad' => $appelApiService->getLaunchpadsData(),
        ]);
    }

    /**
     * @Route("/carte_landpad", name="app_carte_landpad")
     */
    public function carte_landpad(AppelApiService $appelApiService): Response
    {


        // dd($appelApiService->getLandpadsData());
        return $this->render('carte/carte_landpad.html.twig', [
            'datalandpad' => $appelApiService->getLandpadsData(),
        ]);
    }
}
