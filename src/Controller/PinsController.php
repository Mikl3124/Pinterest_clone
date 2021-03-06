<?php

namespace App\Controller;

use App\Repository\PinRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinsController extends AbstractController
{
    /**
     * @Route("/pins")
     */
    public function index(PinRepository $pinRepository)
    {
      $pins = $pinRepository->findAll();
      return $this->render('pins/index.html.twig', compact('pins'));
    }
}
