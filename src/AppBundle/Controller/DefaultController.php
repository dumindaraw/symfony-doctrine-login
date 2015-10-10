<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Login;
use AppBundle\Form\Login\LoginType;

class DefaultController extends Controller
{
  
    /**
     * @Route("/", name="login")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        $login = new Login();
        
        $form = $this->createForm(new LoginType(), $login);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $userName = $form->get('userName')->getData();
            $password = md5($form->get('password')->getData());
     
            $repo = $this->getDoctrine()
                ->getRepository('AppBundle:Login');/*->findBy(array('userName'=>$userName, 'password'=> $password));*/
            
            $query = $repo->createQueryBuilder('p')
                ->select('p.userId')
                ->where('p.userName = :username')
                ->andWhere('p.password = :password')
                ->setParameter('username', $userName)
                ->setParameter('password', $password)
                ->getQuery();

            $loginData = $query->getResult();

            if($query->setMaxResults(1)->getOneOrNullResult()){
                $session->set('userId', $loginData[0]['userId']);
                
                
                return $this->redirectToRoute('dashboard');   
            }
        }
        
        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
