<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="employee_details_tbl")
 */
class EmployeeDetails{
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="firstname", type="string", length=100)
     */
    protected $firstName;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="lastname", type="string", length=100)
     */
    protected $lastName;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $address;
    
    /**
     * @ORM\Column(name="employeeid",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $employeeId;
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function getAddress(){
        return $this->address;
    }
    
    public function getEmployeeId(){
        return $this->employeeId;
    }
    
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    
    public function setAddress($address){
        $this->address = $address;
    }
    
    public function setEmployeeId($empId){
        $this->employeeId = $empId;
    }
    
}
