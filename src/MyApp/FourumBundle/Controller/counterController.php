<?php

namespace MyApp\FourumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class counterController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
