<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 * @ORM\Table(name="users")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    private $sname;
    
        
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $info;
    
    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     */
    private $hasFact = true;
    
    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UsersType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $UsersType;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UsersFacts")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
     */
    private $UsersFacts;
    
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the Avatar")
     * @Assert\File(mimeTypes={"image/jpeg", "image/gif", "image/png", "image/tiff"})
     */
    private $image;

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
       
       $this->image = $image; 
       
        return $this;
    }
    
    public function _construct()
    {
        $this->type = new ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getSname()
    {
        return $this->sname;
    }
    public function setSname($sname)
    {
        $this->sname = $sname;
    }
       
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function gethasFact()
    {
        return $this->hasFact;
    }
    public function sethasFact($hasFact)
    {
        $this->hasFact = $hasFact;
    }
   /**
    * @return UsersType
    */
    public function getUsersType()
    {
        return $this->UsersType;
    }
    public function setUsersType(UsersType $UsersType)
    {
        $this->UsersType = $UsersType;
    }
   /**
    * @return UsersFacts
    */
    public function getUsersFacts()
    {
        return $this->UsersFacts;
    }
     public function setUsersFacts(UsersFacts $UsersFacts)
    {
        $this->UsersFacts = $UsersFacts;
    }
    public function getDate()
    {
        return $this->date;
    }
     public function setDate($date)
    {
        $this->date = $date;
    }
         
    
    
    
}

