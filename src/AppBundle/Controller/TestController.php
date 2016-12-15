<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Users;
use AppBundle\Entity\Articles;
use AppBundle\Form\ContactForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test/{sort}", name="test_url")
     * @Method("GET")
     */
    public function usersAction($sort=null)
    {

        $em = $this->getDoctrine()->getManager();

        switch($sort)
        {
            case 'name':
                $guys = $em->getRepository('AppBundle\Entity\Users')
                    ->findBy(array(),array('name' => 'ASC'));
                break;
            case 'info':
                $guys = $em->getRepository('AppBundle\Entity\Users')
                    ->findBy(array(),array('info' => 'ASC'));
                break;
            case 'sname':
                $guys = $em->getRepository('AppBundle\Entity\Users')
                    ->findBy(array(),array('sname' => 'ASC'));
                break;
            case 'email':
                $guys = $em->getRepository('AppBundle\Entity\Users')
                    ->findBy(array(),array('email' => 'ASC'));
                break;

            default:
                $guys = $em->getRepository('AppBundle\Entity\Users')
                    ->findAllUsersASC();
               break;
        }


        return $this->render('test/test.html.twig', [
            'users' => $guys
        ]);

    }




}
