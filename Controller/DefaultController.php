<?php

namespace ArtesanIO\AgarBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AgarBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
