<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SarController extends AbstractController
{
    /**
     * @Route("/sar", name="sar")
     */
    public function index()
    {
        return $this->render('sar/index.html.twig', [
            'controller_name' => 'SarController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('sar/home.html.twig');
    }
    
}
