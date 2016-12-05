<?php
namespace AppBundle\Form\Models;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class ContactFormModel
{
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */private $name;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */private $email;

    /**
     * @ORM\Column(type="string")
     */private $phone;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */private $subject;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */private $text;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

}