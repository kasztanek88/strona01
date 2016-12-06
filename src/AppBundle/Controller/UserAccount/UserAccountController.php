<?php

namespace AppBundle\Controller\UserAccount;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\ArticleForm;
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

        if(!$article)
        {
            throw $this->createNotFoundException('article not found xaxax');
        }
        return $this->render('user_account/user_articles.html.twig', [
            'article' => $article
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

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success',
                sprintf('User created by: %s!', $this->getUser()->getEmail())
            );

            return $this->redirectToRoute('user_account');

        }

        return $this->render('user_account/new_article.html.twig',[
            'newart' => $form->createView()
        ]);
    }

    /**
     * @Route("/articles/{id}", name="user_misc")
     * @Method("GET")
     */
    public function UserEditArticleAction(Request $request, $id)
    {

    }
    /**
     * @Route("/misc", name="user_misc")
     */
    public function UserMiscAction($email)
    {

    }
}
