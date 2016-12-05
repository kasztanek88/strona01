<?php

/* 
 * For Registration and Resetting
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserRegistrationForm;

class UserController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     */
    public function registerAction(Request $request)
    {
        $form = $this->createForm(UserRegistrationForm::class);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('succes', 'Welcome'.$user->getEmail());
            
            // po zalogowaniu przeniosi nas na homepage
            // return $this->redirectToRoute('homepage'); 
            
            // po rejestracji nas loguje
            return $this->get('security.authentication.guard_handler')
                ->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $this->get('app.security.login_form_authenticator'),
                    'main'
                );
        }
        
        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}