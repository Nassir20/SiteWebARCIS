<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('blog/accueil.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('blog/portfolio.html.twig');
          
    }

     /**
     * @Route("/loisirs", name="loisirs")
     */
    public function loisirs()
    {
        return $this->render('blog/loisirs.html.twig');
          
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv()
    {
        return $this->render('blog/cv.html.twig');
          
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('blog/inscription.html.twig');
          
    }

    /**
     * @Route("/comp", name="comp")
     */
    public function comp()
    {
        return $this->render('blog/comp.html.twig');
          
    }

    /**
     * @Route("/comp2", name="comp2")
     */
    public function comp2()
    {
        return $this->render('blog/comp2.html.twig');
          
    }

    /**
     * @Route("/comp3", name="comp3")
     */
    public function comp3()
    {
        return $this->render('blog/comp3.html.twig');
          
    }

    /**
     * @Route("/print", name="print")
     */
    public function print()
    {
        return $this->render('blog/print.html.twig');
          
    }

    /**
     * @Route("/accueilp", name="accueilp")
     */
    public function accueilp()
    {
        return $this->render('blog/accueilp.html.twig');
          
    }

    /**
     * @Route("/portfoliop", name="portfoliop")
     */
    public function portfoliop()
    {
        return $this->render('blog/portfoliop.html.twig');
          
    }


    /**
     * @Route("/comp1p", name="comp1p")
     */
    public function comp1p()
    {
        return $this->render('blog/comp1p.html.twig');
          
    }

    /**
     * @Route("/comp2p", name="comp2p")
     */
    public function comp2p()
    {
        return $this->render('blog/comp2p.html.twig');
          
    }

    /**
     * @Route("/comp3p", name="comp3p")
     */
    public function comp3p()
    {
        return $this->render('blog/comp3p.html.twig');
          
    }

    /**
     * @Route("/loisirsp", name="loisirsp")
     */
    public function loisirsp()
    {
        return $this->render('blog/loisirsp.html.twig');
          
    }

    /**
     * @Route("/cvp", name="cvp")
     */
    public function cvp()
    {
        return $this->render('blog/cvp.html.twig');
          
    }

    /**
     * @Route("/inscriptionp", name="inscriptionp")
     */
    public function inscriptionp()
    {
        return $this->render('blog/inscriptionp.html.twig');
          
    }
}
