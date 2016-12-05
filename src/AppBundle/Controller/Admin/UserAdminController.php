<?php 

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Users;
use AppBundle\Entity\User;
use AppBundle\Form\UserAddForm;
use AppBundle\Form\LoginForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



/**
 * @Security("is_granted('ROLE_MANAGER')")
 * @Route("admin")
 */
class UserAdminController extends Controller
{
    /**
     * @Route("/users", name="admin_users_list")
     */
    public function indexAction()
    {              
        $user = $this->getDoctrine()
                ->getRepository('AppBundle:Users')
                ->findAll();
        
        return $this->render('admin/users/adminlist.html.twig',[
            'users' => $user
        ]);
    }
    
    /**
     * @Route("/users/new", name="admin_users_new")
     */
    public function addAction(Request $request)
    {               
        $form = $this->createForm(UserAddForm::class);
        $form->handleRequest($request);  
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
                          
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('success', 
                    sprintf('User created by: %s!', $this->getUser()->getEmail())
                    );
            
            return $this->redirectToRoute('admin_users_list');
        }
        
        
        return $this->render('admin/users/new.html.twig',[
            'userForm' => $form->createView()
        ]);
 
    }
    
    /**
     * @Route("/users/{id}/edit", name="admin_users_edit")
     */
    public function editAction(Request $request, Users $user)
    {
        
        $form = $this->createForm(UserAddForm::class, $user);
        
         $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('success', 'User updated!!!');
            
            return $this->redirectToRoute('admin_users_list');
        }
        
        return $this->render('admin/users/edit.html.twig',[
            'userForm' => $form->createView()
        ]);
 
    }
    /**
     * @Route("/panel", name="paneladmin_url")
     */
    public function panelAction()
    {
        $user = $this->getDoctrine()
                ->getRepository('AppBundle:Users')
                ->findAll();
        
        return $this->render('admin/users/test.html.twig',[
            'users' => $user
        ]);
    }
    /**
     * @Route("/userlist", name="userlist_url")
     */
    public function showUserAction()
    {
        $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->findAll();
        
        return $this->render('admin/users/userlist.html.twig',[
            'users' => $user
        ]);
    }
   
    /**
     * @Route("/userlist/{id}/edit", name="edit_user_url")
     */
    public function editUserAction(Request $request, User $user)
    {
        
        $form = $this->createForm(LoginForm::class, $user);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('success', 'User updated!!!');
            
            return $this->redirectToRoute('admin_users_list');
        }
        
        return $this->render('admin/users/edituser.html.twig',[
            'userForm' => $form->createView()
        ]);
    }
}
?>




