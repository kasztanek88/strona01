<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticlesRepository")
 * @ORM\Table(name="articles")
 */
class Articles
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
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $artContent;
    /**
     * @ORM\Column(type="date")
     */
    private $updateAt;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $author = 'user' ;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $avatarNumber = 1;

    /**
     * @return mixed
     */
    public function getAvatarNumber()
    {
        return $this->avatarNumber;
    }

    /**
     * @param mixed $avatarNumber
     */
    public function setAvatarNumber($avatarNumber)
    {
        $this->avatarNumber = $avatarNumber;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getArtContent()
    {
        return $this->artContent;
    }

    /**
     * @param mixed $artContent
     */
    public function setArtContent($artContent)
    {
        $this->artContent = $artContent;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param mixed $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = new \DateTime('now');

    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

}