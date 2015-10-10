<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAction(Request $request)
    {
 
        $session = $request->getSession();
  
        $userId = $session->get('userId');
  
        $employeeDetails = $this->getDoctrine()
        ->getRepository('AppBundle:EmployeeDetails')
        ->find($userId);
   
        $userInfo = array('firstName' => $employeeDetails->getFirstName(), 'lastName' => $employeeDetails->getLastName(),
            'address' => $employeeDetails->getAddress());
        
        return $this->render('dashboard/index.html.twig', $userInfo);
        
    }
    
    /**
     * @Route("/employeeData", name="employeeData")
     */
    public function employeeDataAction(Request $request)
    {
        return $this->render('dashboard/employee.html.twig');      
    }
    
    /**
     * @Route("/leave", name="leave")
     */
    public function leaveAction(Request $request) 
    {
        return $this->render('dashboard/leave.html.twig');    
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {
        
        $session = $request->getSession();
        $session->invalidate();
        
        return $this->redirectToRoute('login');      
    }
  
}
