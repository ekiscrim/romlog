<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    /**
     * @return Response
     */
    public function helloWorld()
    {
        $user = $this->getUser();

        return $this->render('index.html.twig', array(
            'user' => $user
        ));
    }
}