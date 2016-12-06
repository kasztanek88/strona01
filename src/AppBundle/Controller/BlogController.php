<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Articles;
use AppBundle\Form\ContactForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/articles", name="articels_url")
     */
    public function articleAction()
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Articles')
            ->findAll();

        if(!$article)
        {
            throw $this->createNotFoundException('article not found xaxax');
        }
        return $this->render('transit/articels.html.twig', [
            'article' => $article
        ]);
    }
    /**
     * @Route("/articles/{id}", name="read_article")
     */
    public function showArticleAction($id)
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Articles')
            ->findOneBy(['id' => $id]);

        return $this->render('articles/show_articles.html.twig', [
            'article' => $article
        ]);
    }
}
