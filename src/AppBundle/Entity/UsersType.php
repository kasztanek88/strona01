<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersTypeRepository")
 * @ORM\Table(name="users_type")
 */

class UsersType
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */ 
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $type;
    
       
    public function getId()
    {
        return $this->id;
    }
       
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
        
    public function __toString()
    {
        return $this->getType();
    }
}








?>




