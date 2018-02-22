<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MyController extends AbstractController
{
    /**
     * @Route("/", name="my")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('my/index.html.twig');
    }
}
