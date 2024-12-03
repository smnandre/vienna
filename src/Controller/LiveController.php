<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LiveController extends AbstractController
{
    #[Route('/live', name: 'app_live')]
    public function __invoke(): Response
    {
        return $this->render('live.html.twig', [
            'products' => (new ProductRepository())->all(),
        ]);
    }
}
