<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home")
     */
    public function HomePageAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
     /**
     * @Route("/pv")
     */
    public function EmptyPageAction()
    {
        return $this->render('UserBundle:Default:PageVide.html.twig');
    }

      /**
     * @Route("/profile")
     */
    public function UserDachAction()
    {
        return $this->render('UserBundle:Default:profile.html.twig');
    }
    /**
     * @Route("/about")
     */
    public function AboutPageAction()
    {
        return $this->render('UserBundle:Default:about.html.twig');
    }
    /**
     * @Route("/help")
     */
    public function HelpPageAction()
    {
        return $this->render('UserBundle:Default:help.html.twig');
    }
      /**
     * @Route("/contact")
     */
    public function ContactFormAction()
    {
        return $this->render('UserBundle:Default:contact.html.twig');
    }

}
