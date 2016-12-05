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
use AppBundle\Services\trimArticles;

class TransitController extends Controller
{
    
    /**
     * //@Route("/users/new")
     */
    public function newUser()
    {
        $user = new Users();
        $user->setName("Macko");
        $user->setSname("Wujek");
        $user->setInfo("rubaszny jelen przebiegl droge");
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        //return $this->redirectToRoute('homepage');
        return new Response('<html><body>Siemanderko swiezak!</body></html>');
    }

    /**
     * @Route("/projects", name="projects_url")
     */
    public function projectsAction()
    {
    $projects = ['1'=>"first", '2' => "second", '3' => "third"];
        return $this->render('transit/projects.html.twig',[
          'project' => $projects
        ]);
       // return $this->render('transit/projects.html.twig');
    }
    
    /**
     * @Route("/services", name="services_url")
     */
        public function servicesAction()
    {
        return $this->render('transit/services.html.twig');
    }
    
    /**
     * @Route("/users", name="users_url")
     */
    public function usersAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $guys = $em->getRepository('AppBundle\Entity\Users')
                ->findAllUsersASC();
        
        return $this->render('transit/users.html.twig',[
            'users'=>$guys
                ]);
    }
    
    /**
     * @Route("/users/{user_name}", name="user_show_url")
     * @Method("GET")
     */
    public function ShowUserAction($user_name)
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $em->getRepository('AppBundle:Users')
                ->findOneBy(['email' => $user_name]);

        if(!$user)
        {
            throw $this->createNotFoundException('User not found xaxax');
        }
        
        return $this->render('transit/user_show.html.twig', [
            'user' => $user
            
        ]);
    }
    
    
    /**
     * @Route("/articles", name="articels_url")
     */
    public function articlesAction()
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

    /**
     * @Route("/contact", name="contact_url")
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(ContactForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // pobieramy dane z formularza
            $user = $form->getData();

            // tworzymy instancje swift_mailera
            $message = \Swift_Message::newInstance()
                ->setSubject($user->getSubject())
                ->setFrom($user->getEmail())
                ->setTo('symfonymailer88@gmail.com')
                ->setBody($user->getText());
            // wysylamy message
            $this->get('mailer')->send($message);

            $this->addFlash('success',
                sprintf('The message was sent')
            );

            return $this->redirectToRoute('homepage');
        }

        return $this->render('transit/contact.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }
}
?>




