<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_login_tbl")
 */
class Login{
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="username", type="string", length=100)
     */
    protected $userName;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $password;
    
    /**
     * @ORM\Column(name="userid",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $userId;
    
    public function getUserName(){
        return $this->userName;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getUserId(){
        return $this->userId;
    }
    
    public function setUserName($userName){
        $this->userName = $userName;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function setUserId($userId){
        $this->userId = $userId;
    }
    
}
