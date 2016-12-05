<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\LoginForm;
use AppBundle\Form\ResettingForm;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {
        
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername,
        ]);
    
        return $this->render(
            'security/login.html.twig',
            array(
                'form' => $form->createView(),
                'error' => $error,
            )
        );
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('this should not be reached!');
    }

    /**
     * @Route("/resetting", name="resetting_url")
     */
    public function resettingAction(Request $request)
    {
        $form = $this->createForm(ResettingForm::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $form_user = $form->getData();



            //$var = $form->get('yourformfieldname')->getData(); pobieranie jednego elementu z formularza
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:User')
                ->findOneBy(['email' => $form_user]);


            if(!$user)
            {
                throw $this->createNotFoundException('Theres no user with this email');
            }
            $user->setplainPassword('zmienhaslo');

            // tworzymy instancje swift_mailera
            $message = \Swift_Message::newInstance()
                ->setSubject('Pssword Resetting')
                ->setFrom($user->getEmail())
                ->setTo('symfonymailer88@gmail.com')
                ->setBody('Your new password is set to "zmienhaslo". Please change immediately');
            // wysylamy message
            $this->get('mailer')->send($message);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Password sent!!!');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('security/resetting.html.twig',[
            'userForm' => $form->createView()
        ]);
    }
}
