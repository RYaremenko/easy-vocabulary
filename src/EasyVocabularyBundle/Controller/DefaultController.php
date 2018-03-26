<?php

namespace EasyVocabularyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@views/Default/index.html.twig');
    }
}
