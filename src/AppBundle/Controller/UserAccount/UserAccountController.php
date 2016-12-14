<?php

namespace AppBundle\Controller\UserAccount;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\ArticleForm;
use AppBundle\Form\CKArticleForm;
use AppBundle\Form\UserRegistrationForm;
use AppBundle\Entity\Articles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



/**
 * @Security("is_granted('ROLE_ACCOUNT')")
 * @Route("user_account")
 */
class UserAccountController extends Controller
{
    /**
     * @Route("/user/{email}", name="user_account")
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

    /**
     * @Route("/articles", name="user_articles")
     */
    public function UserArticlesAction()
    {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle\Entity\Articles')
            ->findAllArticlesASC();
        $message = null;
        if(!$article)
        {
            $message =  'There are no articles in database';
        }
        return $this->render('user_account/user_articles.html.twig', [
            'article' => $article,
            'message' => $message
        ]);
    }
    /**
     * @Route("/articles/new", name="new_article")
     */
    public function UserNewArticleAction(Request $request)
    {
        $form = $this->createForm(ArticleForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            // pobieramy obiekt user zalogowanego uzytkowanika

            if (!$user = $this->get('security.token_storage')->getToken()->getUser()) {
                throw $this->createAccessDeniedException();
            }

            $em = $this->getDoctrine()->getManager();

            $article->setUpdateAt(new \DateTime('now'));
            $article->setAuthor($user->getEmail());
            
            $em->persist($article);
            $em->flush();

            $this->addFlash('success',
                sprintf('User created by: %s!', $this->getUser()->getEmail())
            );

            return $this->redirectToRoute('user_account', [
                'email' => $user->getEmail()
            ]);

        }

        return $this->render('user_account/new_article.html.twig',[
            'newart' => $form->createView()
        ]);
    }
    /**
     * @Route("/articles/edit/{id}", name="edit_article")
     */
    public function UserEditArticleAction(Request $request, Articles $id)
    {
        
        $form = $this->createForm(ArticleForm::class, $id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            // pobieramy obiekt user zalogowanego uzytkowanika

            if (!$user = $this->get('security.token_storage')->getToken()->getUser()) {
                throw $this->createAccessDeniedException();
            }

            $em = $this->getDoctrine()->getManager();

            $article->setUpdateAt(new \DateTime('now'));
            $article->setAuthor($user->getEmail());

            $em->persist($article);
            $em->flush();

            $this->addFlash('success',
                sprintf('User created by: %s!', $this->getUser()->getEmail())
            );

            return $this->redirectToRoute('user_account', [
                'email' => $user->getEmail()
            ]);

        }

        return $this->render('user_account/edit_article.html.twig',[
            'newart' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name="editme_url")
     * @Method("GET")
     */
    public function UserEditAction(Request $request, User $id)
    {
        //dump($id);die();
        $form = $this->createForm(UserRegistrationForm::class, $id);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();

            $this->addFlash('success', 'User updated!!!');

            return $this->redirectToRoute('admin_users_list');
        }

        return $this->render('user_account/us_edit.html.twig',[
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/misc", name="user_misc")
     */
    public function UserMiscAction()
    {
        return $this->render('user_account/user_misc.html.twig');

    }
}
