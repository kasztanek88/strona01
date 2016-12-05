<?php

namespace AppBundle\Controller\UserAccount;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * @Security("is_granted('ROLE_ACCOUNT')")
 * @Route("user_account")
 */
class UserAccountController extends Controller
{
    /**
     * @Route("/{email}", name="user_account")
     * @Method("GET")
     */
    public function UserAccountAction($email)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')
            ->findOneBy(['email' => $email]);

        if(!$user)
        {
            throw $this->createNotFoundException('User not found xaxax');
        }

        return $this->render('user_account/user_account.html.twig', [
            'user' => $user

        ]);
    }
}
