<?php

namespace App\Controller;

use App\Component\DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{

    private $ddate;
    public function __construct(DateTime $ddate)
    {
        $this->ddate = $ddate;
    }


    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {

        return $this->render('page/index.html.twig', [
            'datee' => $this->ddate->display('2023-02-22'),
        ]);
    }
}
