<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersFactsRepository")
 * @ORM\Table(name="users_facts")
 */
class UsersFacts
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
    private $fact;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;       
            
    /**
     * @ORM\Column(type="string")
     */
    private $filename;
    
    public function getId()
    {
        return $this->id;
    }
    
    
    public function getFact()
    {
        return $this->fact;
    }
    public function setFact($fact)
    {
        $this->fact = $fact;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
    public function getFilename()
    {
        return $this->filename;
    }
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }
    
     public function __toString()
    {
        return $this->getFact();
    }
}


?>




